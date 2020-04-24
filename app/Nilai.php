<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = [
        'pai_smt_satu','pai_smt_dua','pai_smt_tiga','pai_smt_empat','pai_smt_lima','bindo_smt_satu','bindo_smt_dua','bindo_smt_tiga','bindo_smt_empat','bindo_smt_lima','bing_smt_satu','bing_smt_dua','bing_smt_tiga','bing_smt_empat','bing_smt_lima','mtk_smt_satu','mtk_smt_dua','mtk_smt_tiga','mtk_smt_empat','mtk_smt_lima','ipa_smt_satu','ipa_smt_dua','ipa_smt_tiga','ipa_smt_empat','ipa_smt_lima','ips_smt_satu','ips_smt_dua','ips_smt_tiga','ips_smt_empat','ips_smt_lima','prestasi'
    ];
    public function peserta(){
        return $this->belongsTo("App\Peserta");
    }
}
