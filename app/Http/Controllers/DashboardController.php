<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Presence;
use App\Models\Jadwalkelas;
use App\Models\Participant;
use App\Models\Trainerpresence;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participant = Participant::where('roles', 'trainer')->get();
        $presence = Presence::with('user')->paginate(3);
        $jadwalkelas = Jadwalkelas::with('location','kelas')->paginate(3);

        $currentMonth = \Carbon\Carbon::now()->format('Y-m'); // Get the current month in YYYY-MM format
        $totalTransaction = Transaction::where('category', 'New Member')
                            ->where('status', 'approved')
                            ->where('date', 'like', $currentMonth.'%')
                            ->sum('total'); // Calculate the sum of 'total' column

        $totalTransactionNew = Transaction::where('category', 'Re-New')
                            ->where('status', 'approved')
                            ->where('date', 'like', $currentMonth.'%')
                            ->sum('total'); // Calculate the sum of 'total' column

        $totalCuti = Cuti::count();
        $totalTrainerPresence = Trainerpresence::count();
        $totalUserPresence = Presence::count();

        return view('dashboard', [
            'participant' => $participant,
            'jadwalkelas' => $jadwalkelas,
            'presence' => $presence,
            'totalTransaction' => $totalTransaction,
            'totalTransactionNew' => $totalTransactionNew,
            'totalCuti' => $totalCuti,
            'totalTrainerPresence' => $totalTrainerPresence,
            'totalUserPresence' => $totalUserPresence,
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
    public function destroy(string $id)
    {
        //
    }
}
