<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengembalian>
 */
class PengembalianFactory extends Factory
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
        return [
            'kembali_id' => "K".sprintf('%09d', fake()->unique()->numberBetween(1,999999)),
            'kembali_tgl' => fake()->dateTime(),
            'kembali_stats' => "ok",
            'user_id' => 1,
            'pb_id' => $peminjaman->pb_id
        ];
    }
}
