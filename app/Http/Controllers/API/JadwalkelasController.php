<?php

namespace App\Http\Controllers\API;

use App\Models\Jadwalkelas;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class JadwalkelasController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_jadwalkelas');
        $limit = $request->input('limit', 100000);
        $location_id = $request->input('location_id');

        if($id)
        {
            $jadwalkelas = Jadwalkelas::find($id);

            if($jadwalkelas)
                return ResponseFormatter::success(
                    $jadwalkelas,
                    'Data jadwalkelas berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data jadwalkelas tidak ada',
                    404
                );
        }

        $jadwalkelas = Jadwalkelas::with(['kelas','location','participant']);
        if($location_id)
        {
            $jadwalkelas->where('location_id', '=', $location_id);
        }
        return ResponseFormatter::success(
            $jadwalkelas->paginate($limit),
            'Data list jadwalkelas berhasil diambil'
        );
    }
}
