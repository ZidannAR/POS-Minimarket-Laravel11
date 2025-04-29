<?php

namespace Database\Seeders;

use App\Models\BarangInventaris;
use App\Models\JenisBarang;
use App\Models\Peminjaman;
use App\Models\PeminjamanBarang;
use App\Models\Pengembalian;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // JenisBarang::factory()->count(5)->create();
        // BarangInventaris::factory()->count(200)->create();
        // Peminjaman::factory()->count(200)->create();
        // PeminjamanBarang::factory()->count(30)->create();
        Pengembalian::factory()-> count(30) ->create();
    }
}
