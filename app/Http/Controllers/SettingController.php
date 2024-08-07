<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::all();
        $metode = Metode::all();
 
        return view('settings.index', [
         'setting' => $setting,
         'metode' => $metode
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
    public function store(Request $request)
    {
        //
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
    public function edit(Setting $setting)
    {
        $setting = Setting::all();
 
        return view('settings.edit', [
         'setting' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        $data = $request->all();
        $setting->update($data);

        if ($request->has('tnc_cuti')) {
            return redirect()->route('cutis.index')->with('status', 'Berhasil Edit Data');
        }

        return redirect()->route('settings.index')->with('status', 'Berhasil Edit Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

