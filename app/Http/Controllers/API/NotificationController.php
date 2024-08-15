<?php

namespace App\Http\Controllers\API;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id_notification');
        $limit = $request->input('limit', 100000);
        $category = $request->input('category');

        if($id)
        {
            $notification = Notification::find($id);

            if($notification)
                return ResponseFormatter::success(
                    $notification,
                    'Data notification berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data notification tidak ada',
                    404
                );
        }

        $notification = Notification::query();
        if($category)
        {
            $notification->where('category', '=', $category);
        }
        return ResponseFormatter::success(
            $notification->paginate($limit),
            'Data list notification berhasil diambil'
        );
    }
}
