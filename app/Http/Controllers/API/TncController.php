<?php

namespace App\Http\Controllers\API;

use App\Models\Tnc;
use App\Models\Setting;
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
    public function tncdaftar(Request $request)
    {
        $id = $request->input('setting');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            // Mengambil hanya kolom tnc_daftar1, tnc_daftar2, tnc_daftar3
            $setting = Setting::select('tnc_daftar1', 'tnc_daftar2', 'tnc_daftar3')->find($id);

            if($setting)
                return ResponseFormatter::success(
                    $setting,
                    'Data tnc daftar berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data tnc daftar tidak ada',
                    404
                );
        }

        // Mengambil hanya kolom tnc_daftar1, tnc_daftar2, tnc_daftar3 untuk list data
        $setting = Setting::select('tnc_daftar1', 'tnc_daftar2', 'tnc_daftar3');
        return ResponseFormatter::success(
            $setting->paginate($limit),
            'Data list Tnc Daftar berhasil diambil'
        );
    }

}
