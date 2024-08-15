<?php

namespace App\Http\Controllers\API;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_location');
        $limit = $request->input('limit', 100000);

        if($id)
        {
            $location = Location::find($id);

            if($location)
                return ResponseFormatter::success(
                    $location,
                    'Data location berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data location tidak ada',
                    404
                );
        }

        $location = Location::query();
        return ResponseFormatter::success(
            $location->paginate($limit),
            'Data list location berhasil diambil'
        );
    }
}
