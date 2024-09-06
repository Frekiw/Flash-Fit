<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cuti;
use App\Models\Presence;
use App\Models\Jadwalkelas;
use App\Models\Participant;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Trainerpresence;
use Illuminate\Support\Facades\DB;

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
        
        // Mendapatkan tahun saat ini
        $currentYear = Carbon::now()->year;

        // Inisialisasi array untuk 12 bulan dengan nilai 0
        $monthlyTotals = array_fill(0, 12, 0);

        // Mengambil total harga per bulan di tahun ini
        $results = DB::table('transactions')
            ->select(DB::raw('MONTH(date) as month'), DB::raw('SUM(total) as total'))
            ->whereYear('date', $currentYear)
            ->where('status', 'approved')
            ->groupBy(DB::raw('MONTH(date)'))
            ->get();

        // Mengisi array $monthlyTotals dengan hasil query
        foreach ($results as $result) {
            $monthlyTotals[$result->month - 1] = $result->total;
        }

        // Mengubah array menjadi string dengan format 0,0,0,...,0
        $totalsString = implode(', ', $monthlyTotals);

        // Menentukan total paling besar dari 12 bulan
        $maxTotal = max($monthlyTotals);

        return view('dashboard', [
            'participant' => $participant,
            'jadwalkelas' => $jadwalkelas,
            'presence' => $presence,
            'totalTransaction' => $totalTransaction,
            'totalTransactionNew' => $totalTransactionNew,
            'totalCuti' => $totalCuti,
            'totalTrainerPresence' => $totalTrainerPresence,
            'totalUserPresence' => $totalUserPresence,
            'monthlyTotals' => $monthlyTotals,
            'totalsString' => $totalsString,
            'maxTotal' => $maxTotal, // Menambahkan variabel baru ke dalam view
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
