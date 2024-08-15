<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Cuti;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_cuti');
        $limit = $request->input('limit', 100000);
        $roles = $request->input('roles');

        if($id)
        {
            $cuti = Cuti::find($id);

            if($cuti)
                return ResponseFormatter::success(
                    $cuti,
                    'Data Cuti berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data Cuti tidak ada',
                    404
                );
        }

        $cuti = Cuti::query();
        return ResponseFormatter::success(
            $cuti->paginate($limit),
            'Data list Cuti berhasil diambil'
        );
    }

    public function cuti(Request $request)
    {   
        $request->validate([
            'user_id' => 'required',
            'status' => 'required',
            
        ]);
        $cuti = Cuti::create([
            'user_id' => $request->user_id,
            'durasi_cuti' => $request->durasi_cuti,
            'durasi_cuti2' => $request->durasi_cuti2,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'tanggal_pengajuan2' => $request->tanggal_pengajuan2,
            'status' => $request->status,
        ]);

        $cuti = Cuti::with('user')->find($cuti->id_cuti);

        try {
            return ResponseFormatter::success($cuti, 'Tambah Cuti berhasil');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 'Tambah Cuti Gagal');
        }
    }
}
