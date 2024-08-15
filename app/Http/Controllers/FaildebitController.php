<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Faildebit;
use Illuminate\Http\Request;
use App\Http\Requests\FaildebitRequest;

class FaildebitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faildebit = Faildebit::with('user')->get();
        $user = User::get();
 
        return view('faildebits.index', [
         'faildebit' => $faildebit,
         'user' => $user
        ]);
    }
    public function deleteAllFaildebits()
    {
        Faildebit::truncate(); // Ini akan menghapus semua baris di tabel faildebits
        return redirect()->route('faildebits.index')->with('success', 'All faildebits records have been deleted.');
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
    public function store(FaildebitRequest $request)
    {
        $data = $request->all();

        // Check if the user_id already exists in the faildebits table
        if (Faildebit::where('user_id', $data['user_id'])->exists()) {
            return redirect()->route('faildebits.index')->with('status', 'Pengguna sudah terdaftar');
        }

        // Create a new Faildebit record
        Faildebit::create($data);

        return redirect()->route('faildebits.index')->with('status', 'Berhasil Tambah Data');
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
    public function destroy(Faildebit $faildebit)
    {
        $faildebit->delete();

        return redirect()->route('faildebits.index')->with('status','Berhasil Hapus Data');
    }
}
