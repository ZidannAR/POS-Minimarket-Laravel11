<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JenisBarang::get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('request masuk',$request->all());
        $data = JenisBarang::create($request->all());
        return response()->json([
            'status' =>true,
            'message'=>'input_berhasil',
            'data'=>$data

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = JenisBarang::find($id);
        // dd($request->all());
        return response()->json([
            'status' =>true,
            'message'=>'input_berhasil',
            'data'=>$data

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = JenisBarang::find($id);
        // dd($request->all());
        $data->update($request->all());
        return response()->json([
            'status' =>true,
            'message'=>'input_berhasil',
            'data'=>$data

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = JenisBarang::find($id);
        // dd($request->all());
        $data->delete();
        return response()->json([
            'status' =>true,
            'message'=>'input_berhasil',
            'data'=>$data

        ]);
    }
}
