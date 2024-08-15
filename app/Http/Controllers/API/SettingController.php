<?php

namespace App\Http\Controllers\API;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_setting');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            $setting = Setting::find($id);

            if($setting)
                return ResponseFormatter::success(
                    $setting,
                    'Data setting berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data setting tidak ada',
                    404
                );
        }

        $setting = Setting::query();
        return ResponseFormatter::success(
            $setting->paginate($limit),
            'Data list setting berhasil diambil'
        );
    }
}
