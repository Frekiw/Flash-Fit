<?php

namespace App\Http\Controllers\API;

use App\Models\Tnc;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TncController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('tnc');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            $tnc = Tnc::find($id);

            if($tnc)
                return ResponseFormatter::success(
                    $tnc,
                    'Data tnc berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data tnc tidak ada',
                    404
                );
        }

        $tnc = Tnc::query();
        return ResponseFormatter::success(
            $tnc->paginate($limit),
            'Data list tnc berhasil diambil'
        );
    }
}
