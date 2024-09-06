<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trial;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(100000);
        $user2 = User::all();
        $trial = Trial::with('user')->get();

        return view('accounts.index', [
            'item' => $user,
            'user2' => $user2,
            'trial' => $trial
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
    public function store(UserRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('profile_photo_path'))
        {
            $profile_photo_pathPath = $request->file('profile_photo_path')->store('assets/user', 'public');
            $data['profile_photo_path'] = $profile_photo_pathPath;
            $data['password'] = Hash::make($request->password);
            $randomDigits = mt_rand(1000, 9999);
            $data['code_trial'] = 'TRL' . $randomDigits;
        }


        User::create($data);

        return redirect()->route('accounts.index')->with('status','Berhasil Tambah Data');
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
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('profile_photo_path'))
        {
            Storage::delete('public/'.$user->profile_photo_path);
            $profile_photo_pathPath = $request->file('profile_photo_path')->store('assets/user', 'public');
            $data['profile_photo_path'] = $profile_photo_pathPath;
        }
        $data['password'] = Hash::make($request->password);
        
        $user->update($data);
        
        return redirect()->route('accounts.index')->with('status','Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // app/Http/Controllers/UserController.php
    public function hangus(Request $request, $id)
    {
        // Find the user by ID
        $trial = Trial::find($id);

        // Update the code_trial column to "Hangus"
        if ($trial) {
            $trial->status = 'Hangus';
            $trial->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Status berhasil diubah menjadi Hangus.');
    }



}
