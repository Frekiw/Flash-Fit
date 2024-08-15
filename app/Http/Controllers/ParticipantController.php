<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sales;
use App\Models\Packaged;
use App\Models\Presence;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ParticipantRequest;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all();
        $packaged = Packaged::all();
        $presence = Presence::with(['user'])->get();
        $participant = Participant::where('roles', 'member')->get();

        // Calculate total_mgm for each participant
        $totalMgm = [];
        foreach ($participant as $item) {
            $totalMgm[$item->id_participant] = User::where('code_refal', $item->code)->count();
        }
    
        return view('participants.index', compact('sales','participant','packaged','presence','totalMgm'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sales = Sales::all();
        $packaged = Packaged::all();
        $participant = Participant::all();
    
        return view('participants.create', compact('sales','participant','packaged'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipantRequest $request)
    {
        $data = $request->all();
        
        if ($request->roles == "trainer") {
            $init = "TR";
        } else {
            $init = "MM";
        }

        // Generate a unique code
        do {
            $randomDigits = mt_rand(1000, 9999);
            $data['code'] = $init . $randomDigits;
        } while (Participant::where('code', $data['code'])->exists());

        if($request->hasFile('foto_trainer'))
        {
            $foto_trainerPath = $request->file('foto_trainer')->store('assets/trainer', 'public');
            $data['foto_trainer'] = $foto_trainerPath;
        }


        Participant::create($data);

        if ($request->roles == 'trainer') {
            return redirect()->route('datatrainers.index')->with('status', 'Berhasil Tambah Data');
        } else {
            return redirect()->route('participants.index')->with('status', 'Berhasil Tambah Data');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        $sales = Sales::all();
        $packaged = Packaged::all();

        return view('participants.edit', [
            'item'=> $participant,
            'packaged' => $packaged,
            'sales' => $sales
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParticipantRequest $request, Participant $participant)
    {
        $data = $request->all();

        if($request->hasFile('foto_trainer'))
        {
            Storage::delete('public/'.$participant->foto_trainer);
            $foto_trainerPath = $request->file('foto_trainer')->store('assets/trainer', 'public');
            $data['foto_trainer'] = $foto_trainerPath;
        }

        $participant->update($data);
        // Redirect based on role
        if ($participant->roles == 'trainer') {
            return redirect()->route('datatrainers.index')->with('status', 'Berhasil Edit Data');
        } else {
            return redirect()->route('participants.index')->with('status', 'Berhasil Edit Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $participant = Participant::findOrFail($id);
        $role = $participant->roles;

        if ($role == 'trainer') {
            Storage::delete('public/' . $participant->foto_trainer);
        
            $participant->delete(); 
            return redirect()->route('datatrainers.index')->with('status', 'Berhasil Hapus Data');
        } else {
            $participant->delete(); 
            return redirect()->route('participants.index')->with('status', 'Berhasil Hapus Data');
        }
    }

    public function hapus($id_presence)
    {
        $presence = Presence::findOrFail($id_presence);
        $presence->delete();
        return redirect()->route('participants.index')->with('status', 'Berhasil Hapus Data');
    }
}
