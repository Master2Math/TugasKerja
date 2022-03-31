<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaBaruTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_baru_tabel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_peserta');
            $table->agama_id()->default('1');
            $table->string('pertanyaan1');
            $table->string('pertanyaan2');
            $table->string('pertanyaan3');
            $table->string('pertanyaan4');
            $table->string('rincian_tugas');
            $table->string('skor1')->default('0');
            $table->string('skor2')->default('0');
            $table->string('skor3')->default('0');
            $table->string('skor4')->default('0');
            $table->kota_id();
            $table->kecamatan_id();
            $table->kelurahan_id()->default('1');
            $table->timestamps();
            $table->user_id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_baru_tabel');
    }
}
