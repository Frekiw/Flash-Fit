<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Models\Jadwal_training;
use App\Http\Requests\Jadwal_trainingRequest;

class Jadwal_trainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal_training = Jadwal_training::with('user')->get();
        $user = User::all();
        $participant = Participant::where('roles', 'trainer')->get();
 
        return view('jadwal_trainings.index', [
         'jadwal_training' => $jadwal_training,
         'user' => $user,
         'participant' => $participant
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
    public function store(Jadwal_trainingRequest $request)
    {
        $data = $request->all();

        Jadwal_training::create($data);

        return redirect()->route('jadwal_trainings.index')->with('status','Berhasil Tambah Data');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Jadwal_trainingRequest $request, $id_jadwal_training)
    {
        $jadwal_training = Jadwal_training::findOrFail($id_jadwal_training);
        $data = $request->all();

        $jadwal_training->update($data);
        
        return redirect()->route('jadwal_trainings.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal_training $jadwal_training)
    {
        $jadwal_training->delete();

        return redirect()->route('jadwal_trainings.index')->with('status','Berhasil Hapus Data');
    }
}
