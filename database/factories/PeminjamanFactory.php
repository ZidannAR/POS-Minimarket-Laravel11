<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pb_id'=> "K".sprintf('%09d', fake()->unique()->numberBetween(1,999999)),
            'user_id'=> 1,
            'pb_tanggal'=> fake()->dateTime(),
            'pb_no_siswa'=>fake()->numberBetween(1,999999),
            'pb_nama_siswa'=> fake()->word(),
            'pb_dikembalikan'=> fake()->dateTime(),
            'stat'=> 1
        ];
    }
}
