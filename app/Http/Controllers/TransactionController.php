<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;
use App\Models\Session_transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::with('metode','user')->get();
        $transactionsesi = Session_transaction::with('user','hargasesi')->get();
 
        return view('transactions.index', [
         'transaction' => $transaction,
         'transactionsesi' => $transactionsesi
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
    public function store(TransactionRequest $request)
    {
        $data = $request->all();

        Transaction::create($data);

        return redirect()->route('transactions.index')->with('status','Berhasil Edit Data');
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
    public function update(TransactionRequest $request, $id_transaction)
    {
        $transaction = Transaction::findOrFail($id_transaction);
        $data = $request->all();

        $transaction->update($data);
        
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
