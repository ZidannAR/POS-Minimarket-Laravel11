<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisBarang>
 */
class JenisBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_kode_barang' => "K".sprintf('%03d',fake()->unique()->numberBetween(1,99999999)),
            'jenis_nama_barang' => fake()->randomElement(['minyak','mie','bumbu','minuman'])
        ];
    }
}
