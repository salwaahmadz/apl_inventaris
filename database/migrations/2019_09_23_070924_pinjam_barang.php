<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PinjamBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function(Blueprint $table){
            $table->increments('id_peminjaman');
            $table->timestamps();
            $table->string('id_user');
            $table->string('id_kelas');
            $table->string('id_jurusan');
            $table->string('id_inventaris');
            $table->string('id_jenis');
            $table->integer('kuantitas');
            $table->string('id_ruang');
            $table->string('id_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('peminjaman');
    }
}
