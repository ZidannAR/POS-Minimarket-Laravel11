<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class PeminjamanBarang extends Model
{
    use HasFactory;
    protected $table = 'peminjaman_barang';
    protected $fillable = ['pbd_id','pdb_tanggal','pdb_stats'];

    protected $primaryKey = 'pbd_id';
  
}
