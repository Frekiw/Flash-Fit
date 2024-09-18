<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Trial;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TrialController extends Controller
{
    public function trial(Request $request)
    {   
        $request->validate([
            'user_id' => ['required', function ($attribute, $value, $fail) {
                if (Trial::where('user_id', $value)->exists()) {
                    $fail('Pengguna sudah Terdaftar.');
                }
            }],
            'nik' => ['required', function ($attribute, $value, $fail) {
                if (Trial::where('nik', $value)->exists()) {
                    $fail('NIK sudah terpakai.');
                }
            }],
            'location_id' => 'required',
        ]);

        do {
            $randomDigits = mt_rand(1000, 9999);
            $trlcode =  'TRL' . $randomDigits;
        } while (Trial::where('code_trial', $trlcode)->exists());
        $trial = Trial::create([
            'user_id' => $request->user_id,
            'nik' => $request->nik,
            'code_trial' => $trlcode,
            'location_id' => $request->location_id,
        ]);

        $trial = Trial::with('user','location')->find($trial->id_trial);

        try {
            return ResponseFormatter::success($trial, 'Tambah trial berhasil');
        } catch (Exception $e) {
            return ResponseFormatter::error($e->getMessage(), 'Tambah trial Gagal');
        }
    }
}
