<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Participant;

class TrainerController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_participant');
        $limit = $request->input('limit', 100000);
        $roles = $request->input('roles');

        if($id)
        {
            $trainer = Participant::find($id);

            if($trainer)
                return ResponseFormatter::success(
                    $trainer,
                    'Data trainer berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data trainer tidak ada',
                    404
                );
        }

        $trainer = Participant::query();

        if($roles)
        {
            $trainer->where('roles', '=', $roles);
        }

        return ResponseFormatter::success(
            $trainer->paginate($limit),
            'Data list trainer berhasil diambil'
        );
    }
}
