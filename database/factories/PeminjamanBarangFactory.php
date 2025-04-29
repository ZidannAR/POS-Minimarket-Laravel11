<?php

namespace Database\Factories;

use DateTime;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PeminjamanBarang>
 */
class PeminjamanBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $peminjaman = DB::table('peminjaman')
                ->inRandomOrder()
                ->select('pb_id')
                ->first();
                
        $barang = DB::table('barang_inventaris')
            ->inRandomOrder()
            ->select('br_kode')
            ->first();        
        return [
            'pbd_id' => "K" .sprintf('%08d',fake()->unique()->numberBetween(1,999999)),
            'pb_id'=> $peminjaman->pb_id,
            'br_kode'=>$barang->br_kode,
            'pdb_tanggal'=> fake()->dateTime(),
            'pdb_stats'=> 1
        ];
    }
}
