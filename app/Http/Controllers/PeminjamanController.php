<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peminjaman::get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =Peminjaman::create($request->all());
        return response()->json([
            'status' => true,
            'message'=> 'data berhasil disimpan',
            'data'=> $data
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Peminjaman::find($id);

        return response()-> json([
            'status'=> true,
            'message'=> 'data berhasil ditampilkan',
            'data'=> $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Peminjaman::find($id);
        $data->update($request->all());

        return response()-> json([
            'status'=> true,
            'message'=> 'data berhasil diedit',
            'data'=> $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Peminjaman::find($id);

        $data->delete();

        return response()-> json([
            'status'=>true,
            'message'=> 'data berhasil dihapus',
            'data'=> $data
        ]);
    }
}
