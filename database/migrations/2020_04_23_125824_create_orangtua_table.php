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
            
            $table->string('nama_lengkap_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendidikan_terakhir_wali')->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->string('no_telp_wali')->nullable();
            $table->string('hubungan_wali')->nullable();
            $table->foreignId('peserta_id')->nullable();
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
