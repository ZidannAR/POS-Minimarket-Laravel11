<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBarang;
use Illuminate\Http\Request;

class PeminjamanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PeminjamanBarang::get();
        return response()->json($data); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = PeminjamanBarang::create($request->all());
        return response()->json([
            'status'=> true,
            'message'=> 'Data Berhasil Disimpan',
            'data'=> $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = PeminjamanBarang::find($id);

        return response()->json([
            'status' => true,
            'message'=> 'Data Berhasil ditampilkan',
            'data'=> $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = PeminjamanBarang::find($id);

        $data->update($request->all());

        return response()->json([
            'status'=> true,
            'message'=>'data berhasil diubah',
            'data'=> $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = PeminjamanBarang::find($id);

        $data->delete();

        return response()->json([
            'status'=> true,
            'message'=>'data berhasil dihapus
            
            
            ',
            'data'=> $data
        ]);
    }
}
