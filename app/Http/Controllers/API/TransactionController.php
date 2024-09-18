<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\DetailTransaction;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_transaction');
        $limit = $request->input('limit', 100000);
    
        if($id)
        {
            $transaction = Transaction::find($id);

            if($transaction)
                return ResponseFormatter::success(
                    $transaction,
                    'Data transaction berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data transaction tidak ada',
                    404
                );
        }

        $transaction = Transaction::query();
        return ResponseFormatter::success(
            $transaction->paginate($limit),
            'Data list transaction berhasil diambil'
        );
    }
    public function checkout(Request $request)
{
    $request->validate([
        'date' => 'required',
        'category' => 'required',
        'harga_asli' => 'required',
        'user_id' => 'required|exists:users,id',
        'metode_id' => 'required',
        'total' => 'required',
        'status' => 'required',
        'picture' => 'required|image|max:2048'
    ]);

    $picturePath = $request->file('picture')->store('assets/transaction', 'public');

    $transaction = Transaction::create([
        'date' => $request->date,
        'category' => $request->category,
        'user_id' => $request->user_id,
        'metode_id' => $request->metode_id,
        'harga_asli' => $request->harga_asli,
        'potongan' => $request->potongan,
        'voucher' => $request->voucher,
        'total' => $request->total,
        'status' => $request->status,
        'picture' => $picturePath
    ]);

    $transaction = Transaction::with(['user', 'metode'])->find($transaction->id_transaction);

    try {
        $transaction->save();

        // Determine detail based on category
        $detail = match ($transaction->category) {
            'Re-New' => 'Membership 3 bulan kategori Silver ',
            'New Member' => 'Membership 3 bulan kategori Silver MEMBER',
            'Sesi-PT' => 'Sesi Personal Training ',
            default => '-',
        };

        // Create a single detail transaction
        DetailTransaction::create([
            'user_id' => Auth::user()->id,
            'transaction_id' => $transaction->id_transaction,
            'detail' => $detail,
            'date' => $transaction->date,
            'total' => $transaction->total,
        ]);

        return ResponseFormatter::success('Transaksi berhasil');
    } catch (Exception $e) {
        return ResponseFormatter::error($e->getMessage(), 'Transaksi Gagal');
    }
}


}
