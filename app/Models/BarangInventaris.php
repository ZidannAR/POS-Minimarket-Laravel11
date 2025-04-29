<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangInventaris extends Model
{
    use HasFactory;
    protected $table = "Barang_Inventaris";

    protected $fillable = ['br_kode','br_nama','barang_tangggal_terima','barang_tanggal_entry','barang_status'];
    protected $guarded = [];
    
    protected $primaryKey = 'br_kode';
}

