<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangtuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtua', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_terakhir_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('agama_ayah');
            $table->string('no_telp_ayah');

            $table->string('nama_lengkap_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_terakhir_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('agama_ibu');
            $table->string('no_telp_ibu');
            
            $table->string('nama_lengkap_wali');
            $table->string('tempat_lahir_wali');
            $table->date('tanggal_lahir_wali');
            $table->string('pekerjaan_wali');
            $table->string('pendidikan_terakhir_wali');
            $table->string('kewarganegaraan_wali');
            $table->string('agama_wali');
            $table->string('no_telp_wali');
            $table->string('hubungan_wali');
            $table->foreignId('peserta_id');
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
        Schema::dropIfExists('orangtua');
    }
}
