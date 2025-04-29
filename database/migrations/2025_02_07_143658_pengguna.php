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
        Schema::create('pengguna',function(Blueprint $table){
            $table->string('user_id',12);
            $table->string('user_nama',50);
            $table->string('user_pass',32);
            $table->string('user_hak',2);
            $table->string('user_sts',3);
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
