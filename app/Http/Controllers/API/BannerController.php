<?php

namespace App\Http\Controllers\API;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_banner');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            $banner = Banner::find($id);

            if($banner)
                return ResponseFormatter::success(
                    $banner,
                    'Data banner berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data banner tidak ada',
                    404
                );
        }

        $banner = Banner::query();
        return ResponseFormatter::success(
            $banner->paginate($limit),
            'Data list banner berhasil diambil'
        );
    }
}
