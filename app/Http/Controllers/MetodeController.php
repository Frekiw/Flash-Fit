<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use Illuminate\Http\Request;
use App\Http\Requests\MetodeRequest;
use Illuminate\Support\Facades\Storage;

class MetodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(MetodeRequest $request)
    {
        $data = $request->all();

        Metode::create($data);

        return redirect()->route('settings.index')->with('status','Berhasil Edit Data');
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
    public function update(MetodeRequest $request, $id_metode)
    {
        $metode = Metode::findOrFail($id_metode);
        $data = $request->all();

        $metode->update($data);
        
        return redirect()->route('settings.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Metode $metode)
    {
        $metode->delete();
        return redirect()->route('settings.index')->with('status','Berhasil Hapus Data');
    }
}
