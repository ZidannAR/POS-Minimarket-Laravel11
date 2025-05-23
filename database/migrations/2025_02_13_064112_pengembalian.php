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
       Schema::create('pengembalian',function(Blueprint $table){
        $table->string('kembali_id',20);
        $table->primary('kembali_id');
        $table->string('pb_id',20);
        $table->string('user_id',10);
        $table->dateTime('kembali_tgl');
        $table->string('kembali_stats',2);
        $table->timestamps();
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
