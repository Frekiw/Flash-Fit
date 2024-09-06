<?php

namespace App\Http\Controllers\API;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

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
}
