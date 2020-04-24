<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('cita_cita');
            $table->string('hobi');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->string('golongan_darah');
            $table->string('alamat');
            $table->string('keluruhan');
            $table->string('kecamatan');
            $table->string('kota_kabupaten');
            $table->string('propinsi');
            $table->string('no_telp_rumah');
            $table->string('tinggal_dengan');
            $table->string('penyakit');
            $table->string('email');
           
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
        Schema::dropIfExists('peserta');
    }
}
