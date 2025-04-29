<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;
class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $fillable = ['kembali_id','kembali_tgl','kembali_stats'];
}
