<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Requests\VoucherRequest;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voucher = Voucher::all();

    return view('vouchers.index', [
        'voucher' => $voucher
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
    public function store(VoucherRequest $request)
    {
        $data = $request->all();
        $voucher = Voucher::create($data);
        return redirect()->route('vouchers.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(VoucherRequest $request, $id_voucher)
    {
        $voucher = Voucher::findOrFail($id_voucher);
        $data = $request->all();
        $voucher->update($data);
        return redirect()->route('vouchers.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_voucher)
    {
        $voucher = Voucher::findOrFail($id_voucher);
        $voucher->delete();
        return redirect()->route('vouchers.index')->with('status', 'Berhasil Hapus Data');
    }
}
