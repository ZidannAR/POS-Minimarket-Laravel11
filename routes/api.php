<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangInventarisController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeminjamanBarangController;
use App\Http\Controllers\PengembalianController;

Route::apiResource('jenis_barang',JenisBarangController::class);
Route::apiResource('barang_inventaris', BarangInventarisController::class);
Route::apiResource('Peminjaman',PeminjamanController::class);
Route::apiResource('peminjaman_barang',PeminjamanBarangController::class);
Route::apiResource('pengembalian', PengembalianController::class);
Route::put('Peminjaman/{id}', [PeminjamanController::class, 'update']);
