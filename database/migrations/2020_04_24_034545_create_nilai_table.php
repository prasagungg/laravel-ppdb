<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('pai_smt_satu');
            $table->integer('pai_smt_dua');
            $table->integer('pai_smt_tiga');
            $table->integer('pai_smt_empat');
            $table->integer('pai_smt_lima');
            
            $table->integer('bindo_smt_satu');
            $table->integer('bindo_smt_dua');
            $table->integer('bindo_smt_tiga');
            $table->integer('bindo_smt_empat');
            $table->integer('bindo_smt_lima');

            
            $table->integer('bing_smt_satu');
            $table->integer('bing_smt_dua');
            $table->integer('bing_smt_tiga');
            $table->integer('bing_smt_empat');
            $table->integer('bing_smt_lima');

            $table->integer('mtk_smt_satu');
            $table->integer('mtk_smt_dua');
            $table->integer('mtk_smt_tiga');
            $table->integer('mtk_smt_empat');
            $table->integer('mtk_smt_lima');

            $table->integer('ipa_smt_satu');
            $table->integer('ipa_smt_dua');
            $table->integer('ipa_smt_tiga');
            $table->integer('ipa_smt_empat');
            $table->integer('ipa_smt_lima');

            $table->integer('ips_smt_satu');
            $table->integer('ips_smt_dua');
            $table->integer('ips_smt_tiga');
            $table->integer('ips_smt_empat');
            $table->integer('ips_smt_lima');

            $table->string('prestasi');
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
        Schema::dropIfExists('nilai');
    }
}
