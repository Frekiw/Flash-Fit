<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\NotificationRequest;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notification = Notification::all();
 
        return view('notifications.index', [
         'notification' => $notification
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NotificationRequest $request)
    {
        $data = $request->all();

        Notification::create($data);

        return redirect()->route('notifications.index')->with('status','Berhasil Edit Data');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NotificationRequest $request, $id_notification)
    {
        $notification = Notification::findOrFail($id_notification);
        $data = $request->all();

        $notification->update($data);
        
        return redirect()->route('notifications.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();
        return redirect()->route('notifications.index')->with('status','Berhasil Hapus Data');
    }
}
