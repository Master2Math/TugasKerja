<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaValidasiTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_validasi_tabel', function (Blueprint $table) {
            $table->increments('id');
            $table->peserta_id();
            $table->status();
            $table->timestamp('tgl_validasi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->validasi_nik();
            $table->validasi_akta();
            $table->validasi_umur();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_validasi_tabel');
    }
}
