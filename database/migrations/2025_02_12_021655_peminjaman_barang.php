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
        Schema::create('peminjaman_barang', function(Blueprint $table){
            $table->string('pbd_id',20);
            $table->string('pb_id',20);
            $table->string('br_kode',30);
            $table-> dateTime('pdb_tanggal');
            $table-> string('pdb_stats',2);
            $table->primary('pbd_id');
            $table->timestamps();
            $table-> foreign('pb_id')->references('pb_id')->on('peminjaman')->cascadeOnUpdate();
            $table-> foreign('br_kode')->references('br_kode')->on('barang_inventaris')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
