<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BarangInventaris;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BarangInventarisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $data = DB::table('jenis_barang')
        ->inRandomOrder()
        ->select('jenis_kode_barang')
        ->first();
        return [
            'br_kode' => "K".sprintf('%08d',fake()->unique()->numberBetween(1,99999999)),
            'jenis_kode_barang' => $data->jenis_kode_barang,
            'user_id'=> 1,
            'br_nama'=> fake()-> word(),
            'barang_tangggal_terima'=> fake()-> date(),
            'barang_tanggal_entry'=> fake()-> dateTime(),
            'barang_status'=> 1
        ];
    }
}
