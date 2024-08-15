<?php

namespace App\Http\Controllers\API;

use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_voucher');
        $limit = $request->input('limit', 100000);
        $category = $request->input('category');

        if($id)
        {
            $voucher = voucher::find($id);

            if($voucher)
                return ResponseFormatter::success(
                    $voucher,
                    'Data voucher berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data voucher tidak ada',
                    404
                );
        }

        $voucher = voucher::query();
        if($category)
        {
            $voucher->where('category', '=', $category);
        }
        return ResponseFormatter::success(
            $voucher->paginate($limit),
            'Data list voucher berhasil diambil'
        );
    }
}
