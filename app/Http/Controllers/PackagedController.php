<?php

namespace App\Http\Controllers;

use App\Models\Packaged;
use Illuminate\Http\Request;
use App\Http\Requests\PackagedRequest;

class PackagedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packaged = Packaged::get();

        return view('packageds.index', compact('packaged'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packaged = Packaged::all();

        return view('packageds.create', [
            'item'=> $packaged
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PackagedRequest $request)
    {
        $data = $request->all();

        Packaged::create($data);

        return redirect()->route('packageds.index')->with('status','Berhasil Tambah Data');
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
    public function edit(Packaged $packaged)
    {
        return view('packageds.edit', [
            'item'=> $packaged
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PackagedRequest $request, Packaged $packaged)
    {
        $data = $request->all();
        $packaged->update($data);
        return redirect()->route('packageds.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packaged $packaged)
    {
        $packaged -> delete();
        return redirect()->route('packageds.index')->with('status','Berhasil Hapus Data');
    }
}
