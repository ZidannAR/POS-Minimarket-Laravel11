<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "Peminjaman";

    protected $fillable = ['pb_id','user_id','pb_tanggal','pb_no_siswa','pb_nama_siswa','pb_dikembalikan','stat'];

    protected $guarded =[];

    protected $primaryKey = 'pb_id';
}
