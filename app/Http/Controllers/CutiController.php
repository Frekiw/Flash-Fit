<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\CutiRequest;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $setting = Setting::all();
    $cuti = Cuti::with('user')
    ->get();

    return view('cutis.index', compact('setting','cuti'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::all();
        $user = User::all();

        return view('cutis.create', compact('setting','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CutiRequest $request)
    {
        $data = $request->all();

        Cuti::create($data);

        return redirect()->route('cutis.index')->with('status','Berhasil Tambah Data');
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
    public function edit(Cuti $cuti)
    {
        // $cuti = Cuti::all();
        // $setting = Setting::all();
        $user = User::all();

        return view('cutis.edit', [
            'item'=> $cuti,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CutiRequest $request, Cuti $cuti)
    {
        $data = $request->all();
        $cuti->update($data);
        return redirect()->route('cutis.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuti $cuti)
    {
        $cuti -> delete();
        return redirect()->route('cutis.index')->with('status','Berhasil Hapus Data');
    }
}
