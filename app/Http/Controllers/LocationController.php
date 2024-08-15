<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = Location::all();
 
        return view('locations.index', [
         'location' => $location
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
    public function store(LocationRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('photo'))
        {
            $photoPath = $request->file('photo')->store('assets/location', 'public');
            $data['photo'] = $photoPath;
        }
        Location::create($data);

        return redirect()->route('locations.index')->with('status','Berhasil Edit Data');
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
    public function update(LocationRequest $request, $id_location)
    {
        $location = Location::findOrFail($id_location);
        $data = $request->all();

        if($request->hasFile('photo'))
        {
            Storage::delete('public/'.$location->photo);
            $photoPath = $request->file('photo')->store('assets/location', 'public');
            $data['photo'] = $photoPath;
        }
        
        $location->update($data);
        
        return redirect()->route('locations.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        Storage::delete('public/' . $location->photo);
        $location->delete();

        return redirect()->route('locations.index')->with('status','Berhasil Hapus Data');
    }

    public function location($id_location)
    {
        $location = Location::select('*')->where('id_location', $id_location)->get();
        return view('locations.qrcode', ['location' => $location]);
    }
}
