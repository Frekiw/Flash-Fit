<?php

namespace App\Http\Controllers\API;

use App\Models\Packaged;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class PackagedController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_packaged');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            $packaged = Packaged::find($id);

            if($packaged)
                return ResponseFormatter::success(
                    $packaged,
                    'Data packaged berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data packaged tidak ada',
                    404
                );
        }

        $packaged = Packaged::query();
        return ResponseFormatter::success(
            $packaged->paginate($limit),
            'Data list packaged berhasil diambil'
        );
    }
}
