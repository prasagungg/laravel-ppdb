<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->string('ftk_rapot_satu');
            $table->string('ftk_rapot_dua');
            $table->string('ftk_rapot_tiga');
            $table->string('ftk_rapot_empat');
            $table->string('ftk_rapot_lima');
            $table->string('ftk_akte_kelahiran');
            $table->string('ftk_kartu_keluarga');
            $table->string('foto_peserta');
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
        Schema::dropIfExists('berkas');
    }
}
