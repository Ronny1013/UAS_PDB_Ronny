<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->bigInteger('keluarga_id')->unsigned()->index();
            $table->foreign('keluarga_id')->references('id')->on('kartu_keluarga');
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->bigInteger('level_pendidikan_id')->unsigned()->index();
            $table->foreign('level_pendidikan_id')->references('id')->on('level_pendidikan');
            $table->bigInteger('pekerjaan_id')->unsigned()->index();
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan');
            $table->string('status_pernikahan');
            $table->string('status_keluarga');
            $table->bigInteger('kewarganegaraan_id')->unsigned()->index();
            $table->foreign('kewarganegaraan_id')->references('id')->on('kewarganegaraan');
            $table->string('ayah');
            $table->string('ibu');
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
        Schema::dropIfExists('penduduk');
    }
}
