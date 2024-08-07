<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests\Session_transactionRequest;
use App\Models\Session_transaction;

class Session_transactionController extends Controller
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
    public function update(Session_transactionRequest $request, $id_transactionsesi)
    {
        $transactionsesi = Session_transaction::findOrFail($id_transactionsesi);
        $data = $request->all();

        $transactionsesi->update($data);
        
        return redirect()->route('transactions.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
