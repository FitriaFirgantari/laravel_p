<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Thabispakai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thabispakai', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kode');
            $table->date('tanggal');
            $table->string('type');
            $table->string('stock');
            $table->string('posisi');
            $table->string('harga');
            $table->string('gambar');
            $table->string('status');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
