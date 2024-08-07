<?php

namespace App\Http\Controllers;

use App\Models\Hargasesi;
use App\Models\User;
use App\Models\Sales;
use App\Models\Packaged;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Models\Trainerpresence;
use Illuminate\Support\Facades\Log;

class DatatrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all();
        $packaged = Packaged::all();
        $trainerpresence = Trainerpresence::with(['user', 'participant'])->get();
        $participant = Participant::where('roles', 'trainer')->get();
    
        return view('datatrainers.index', compact('sales','participant','packaged','trainerpresence'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_trainerpresence)
    {
        $trainerpresence = Trainerpresence::findOrFail($id_trainerpresence);
        $trainerpresence->delete();
        return redirect()->route('datatrainers.index')->with('status', 'Berhasil Hapus Data');
    }

    
}
