<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'berkas';
    protected $fillable = [
        'ftk_rapot_satu','ftk_rapot_dua','ftk_rapot_tiga','ftk_rapot_empat','ftk_rapot_lima','ftk_akte_kelahiran','ftk_kartu_keluarga','foto_peserta'
    ];
    public function peserta(){
        return $this->belongsTo("App\Peserta");
    }
}
