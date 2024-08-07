<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HargasesiRequest;
use App\Models\Hargasesi;

class HargasesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hargasesi = Hargasesi::all();
 
        return view('hargasesis.index', [
         'hargasesi' => $hargasesi
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
    public function store(HargasesiRequest $request)
    {
        $data = $request->all();

        Hargasesi::create($data);

        return redirect()->route('hargasesis.index')->with('status','Berhasil Edit Data');
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
    public function update(HargasesiRequest $request, $id_hargasesi)
    {
        $hargasesi = Hargasesi::findOrFail($id_hargasesi);
        $data = $request->all();

        $hargasesi->update($data);
        
        return redirect()->route('hargasesis.index')->with('status','Berhasil Edit Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hargasesi $hargasesi)
    {
        $hargasesi->delete();
        return redirect()->route('hargasesis.index')->with('status','Berhasil Hapus Data');
    }
}
