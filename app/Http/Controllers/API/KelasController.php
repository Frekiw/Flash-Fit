<?php

namespace App\Http\Controllers\API;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_kelas');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            $kelas = kelas::find($id);

            if($kelas)
                return ResponseFormatter::success(
                    $kelas,
                    'Data kelas berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data kelas tidak ada',
                    404
                );
        }

        $kelas = kelas::query();
        return ResponseFormatter::success(
            $kelas->paginate($limit),
            'Data list kelas berhasil diambil'
        );
    }
}
