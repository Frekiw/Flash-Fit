<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Location;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Http\Requests\KelasRequest;
use Illuminate\Support\Facades\Storage;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
 
        return view('kelass.index', [
         'kelas' => $kelas
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
    public function store(KelasRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/kelas', 'public');
            $data['picture'] = $picturePath;
        }
        Kelas::create($data);

        return redirect()->route('kelass.index')->with('status','Berhasil Edit Data');
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
    public function update(KelasRequest $request, $id_kelas)
    {
        $kelas = Kelas::findOrFail($id_kelas);
        $data = $request->all();

        if($request->hasFile('picture'))
        {
            Storage::delete('public/'.$kelas->picture);
            $picturePath = $request->file('picture')->store('assets/kelas', 'public');
            $data['picture'] = $picturePath;
        }
        
        $kelas->update($data);
        
        return redirect()->route('kelass.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
//     public function destroy(Kelas $kelas)
// {
//     // Check if picture exists before attempting to delete
//     if ($kelas->picture && Storage::exists('public/' . $kelas->picture)) {
//         Storage::delete('public/' . $kelas->picture);
//     }

//     $kelas->delete();

//     return redirect()->route('kelass.index')->with('status', 'Berhasil Hapus Data');
// }

    public function destroy($id_kelas)
    {
        $kelas = kelas::findOrFail($id_kelas);
        if ($kelas->picture && Storage::exists('public/' . $kelas->picture)) {
            Storage::delete('public/' . $kelas->picture);
        }
        $kelas->delete();
        return redirect()->route('kelass.index')->with('status', 'Berhasil Hapus Data');
    }

}
