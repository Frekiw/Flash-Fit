<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ParticipantController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_participant');
        $limit = $request->input('limit', 100000);
        $roles = $request->input('roles');

        if($id)
        {
            $participant = Participant::find($id);

            if($participant)
                return ResponseFormatter::success(
                    $participant,
                    'Data participant berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data participant tidak ada',
                    404
                );
        }

        $participant = participant::query();
        return ResponseFormatter::success(
            $participant->paginate($limit),
            'Data list participant berhasil diambil'
        );
    }

    public function participant(Request $request)
    {   
        $request->validate([
            'tanggal' => 'required',
            'code_sales' => 'required',
            'name' => 'required',
            'email' => 'required',
            'tgl_lahir' => 'required',
            'roles' => 'required',
            'no_telp' => 'required',
            'packaged_id' => 'required',
            'location_id' => 'required',
            'category_m' => 'required',
            'harga_m' => 'required',
            'name_m' => 'required',
            
        ]);
        do {
            $randomDigits = mt_rand(1000, 9999);
            $genCode = 'MM' . $randomDigits;
        } while (Participant::where('code', $genCode)->exists());
        $participant = participant::create([
            'tanggal' => $request->tanggal,
            'code' => $genCode,
            'code_sales' => $request->code_sales,
            'code_referal' => $request->code_referal,
            'name' => $request->name,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'roles' => $request->roles,
            'no_telp' => $request->no_telp,
            'packaged_id' => $request->packaged_id,
            'location_id' => $request->location_id,
            'category_m' => $request->category_m,
            'harga_m' => $request->harga_m,
            'name_m' => $request->name_m,
        ]);

        $participant = participant::with('packaged','location')->find($participant->id_participant);

        try {
            return ResponseFormatter::success($participant, 'Tambah participant berhasil');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 'Tambah participant Gagal');
        }
    }
}
