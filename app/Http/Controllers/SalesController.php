<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Http\Requests\SalesRequest;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all sales records
        $sales = Sales::all();
    
        // Loop through each sales record to count the total clients
        foreach ($sales as $sale) {
            $sale->Total_client = User::where('code_sales', $sale->code_sales)->count();
        }
    
        // Pass the sales data to the view
        return view('saless.index', [
            'sales' => $sales
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
    // public function store(SalesRequest $request)
    // {
    //     $data = $request->all();

    //     Sales::create($data);

    //     return redirect()->route('saless.index')->with('status','Berhasil Tambah Data');
    // }
    public function store(SalesRequest $request)
    {
        // Get all request data
        $data = $request->all();

        // Create the Sales record without the code_sales
        $sales = Sales::create($data);

        // Update the code_sales field
        $sales->code_sales = 'SL00' . $sales->id_sales;
        $sales->save();

        // Redirect back with a success message
        return redirect()->route('saless.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(SalesRequest $request, $id_sales)
    {
        $sales = Sales::findOrFail($id_sales);
        $data = $request->all();
        $sales->update($data);
        return redirect()->route('saless.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Sales $sales)
    // {
    //     $sales -> delete();
    //     return redirect()->route('saless.index')->with('status','Berhasil Hapus Data');
    // }
    public function destroy($id_sales)
    {
        $sales = Sales::findOrFail($id_sales);
        $sales->delete();
        return redirect()->route('saless.index')->with('status', 'Berhasil Hapus Data');
    }
}
