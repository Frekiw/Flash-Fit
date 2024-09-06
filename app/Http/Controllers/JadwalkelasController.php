<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Location;
use App\Models\Jadwalkelas;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\JadwalkelasRequest;

class JadwalkelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = Location::all();
        $jadwalkelas = Jadwalkelas::all();
        $participant = Participant::where('roles', 'trainer')->get();
 
        return view('kelass.index', [
         'location' => $location,
         'jadwalkelas' => $jadwalkelas,
         'participant' => $participant,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JadwalkelasRequest $request)
    {
        $data = $request->all();

        Jadwalkelas::create($data);

        return redirect()->route('kelass.index')->with('status','Berhasil Tambah Data');
    }


    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JadwalkelasRequest $request, $id_jadwalkelas)
    {
        $jadwalkelas = Jadwalkelas::findOrFail($id_jadwalkelas);
        $data = $request->all();

        if($request->hasFile('photo'))
        {
            Storage::delete('public/'.$jadwalkelas->photo);
            $photoPath = $request->file('photo')->store('assets/jadwalkelas', 'public');
            $data['photo'] = $photoPath;
        }
        
        $jadwalkelas->update($data);
        
        return redirect()->route('kelass.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_jadwalkelas)
    {
        $jadwalkelas = Jadwalkelas::findOrFail($id_jadwalkelas);
        if ($jadwalkelas->photo && Storage::exists('public/' . $jadwalkelas->photo)) {
            Storage::delete('public/' . $jadwalkelas->photo);
        }
        $jadwalkelas->delete();
        return redirect()->route('kelass.index')->with('status', 'Berhasil Hapus Data');
    }

    public function jadwallocation($id)
    {
        $location = Location::findOrFail($id);
        $daftarloc = Location::all();
        $jadwalkelas = Jadwalkelas::with('jeniskelass')->where('location_id', $id)->get();
        $kelas = Kelas::all();
        $participant = Participant::where('roles', 'trainer')->get();

        return view('jadwalkelass.location', [
            'location' => $location,            
            'daftarloc' => $daftarloc,
            'jadwalkelas' => $jadwalkelas,
            'kelas' => $kelas,
            'participant' => $participant,
        ]);
    }
}
