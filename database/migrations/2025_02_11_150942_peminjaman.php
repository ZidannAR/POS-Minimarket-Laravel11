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
        Schema::create('Peminjaman',function (Blueprint $table)
        {
            $table-> string('pb_id',20);
            $table-> string('user_id',10);
            $table-> dateTime('pb_tanggal',);
            $table-> string('pb_no_siswa',20);
            $table->string('pb_nama_siswa',200);
            $table-> dateTime('pb_dikembalikan');
            $table-> string('stat',2);
            $table-> timestamps();
            $table-> primary('pb_id');
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
