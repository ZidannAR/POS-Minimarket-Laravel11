<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang_inventaris', function(Blueprint $table){
            $table-> string ('br_kode',30);
            $table-> string('jenis_kode_barang',255);
            $table-> string('user_id',10);
            $table-> primary('br_kode');
            $table-> string('br_nama',50);
            $table-> date('barang_tangggal_terima');
            $table-> dateTime('barang_tanggal_entry');
            $table-> char('barang_status',2);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
			$table->softDeletes();
            $table->foreign('jenis_kode_barang')->references('jenis_kode_barang')->on('jenis_barang')
                ->cascadeOnUpdate();
            
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
