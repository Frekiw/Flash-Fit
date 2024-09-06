<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrialRequest;
use App\Models\Trial;

class TrialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trial = Trial::with('user')->get();
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
    public function store(Request $request)
    {
        //
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
    public function update(TrialRequest $request, Trial $trial)
    {
        $data = $request->all();
        $trial->update($data);
        return redirect()->route('accounts.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_trial)
    {
        $trial = Trial::findOrFail($id_trial);
        $trial -> delete();
        return redirect()->route('accounts.index')->with('status','Berhasil Hapus Data');
    }
}
