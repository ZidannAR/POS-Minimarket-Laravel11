<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jenis_barang',function(Blueprint $table){

            $table-> string('jenis_kode_barang',255);
            $table-> string('jenis_nama_barang',255);
            $table-> primary('jenis_kode_barang');
            $table-> timestamps();
}
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
