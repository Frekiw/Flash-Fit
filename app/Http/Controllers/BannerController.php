<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::all();
 
        return view('banners.index', [
         'banner' => $banner
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
    public function store(BannerRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('photo'))
        {
            $photoPath = $request->file('photo')->store('assets/banner', 'public');
            $data['photo'] = $photoPath;
        }
        Banner::create($data);

        return redirect()->route('banners.index')->with('status','Berhasil Edit Data');
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
    public function update(BannerRequest $request, $id_banner)
    {
        $banner = Banner::findOrFail($id_banner);
        $data = $request->all();

        if($request->hasFile('photo'))
        {
            Storage::delete('public/'.$banner->photo);
            $photoPath = $request->file('photo')->store('assets/banner', 'public');
            $data['photo'] = $photoPath;
        }
        
        $banner->update($data);
        
        return redirect()->route('banners.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        Storage::delete('public/' . $banner->photo);
        $banner->delete();

        return redirect()->route('banners.index')->with('status','Berhasil Hapus Data');
    }
}
