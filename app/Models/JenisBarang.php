<?php

namespace App\Models;


use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class JenisBarang extends Model
{
    use HasFactory;
    protected $table = 'jenis_barang';
    protected $fillable = ['jenis_kode_barang','jenis_nama_barang'];
    protected $guarded = [];

    protected $primaryKey= 'jenis_kode_barang';

    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; 

}
