<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BarangInventaris;

class BarangInventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BarangInventaris::get();

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('Request masuk', $request->all()); // Letakkan di awal
        $data = BarangInventaris::create($request->all());
        return response()->json([
            'status' => true,
            'message'=> 'Data berhasil disimpan',
            'data'=> $data
        ]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = BarangInventaris::find($id);
        
        return response() -> json([
            'status' => true,
            'message'=> 'data berhasil ditampilkan',
            'data'=> $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = BarangInventaris::find($id);
        $data->update($request->all());

        return response() -> json([
            'status' => true,
            'message'=> 'data berhasil diupdate',
            'data'=> $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = BarangInventaris::find($id);

        $data->delete();

        return response() -> json([
            'status' => true,
            'message'=> 'data berhasil dihapus',
            'data'=> $data
        ]);
    }
}
