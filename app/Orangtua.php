<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    protected $table = 'orangtua';
    protected $fillable = [
        'nama_lengkap_ayah','tempat_lahir_ayah','tanggal_lahir_ayah','pekerjaan_ayah','pendidikan_terakhir_ayah','kewarganegaraan_ayah','agama_ayah','no_telp_ayah','nama_lengkap_ibu','tempat_lahir_ibu','tanggal_lahir_ibu','pekerjaan_ibu','pendidikan_terakhir_ibu','kewarganegaraan_ibu','agama_ibu','no_telp_ibu',
        'nama_lengkap_wali','tempat_lahir_wali','tanggal_lahir_wali','pekerjaan_wali','pendidikan_terakhir_wali','kewarganegaraan_wali','agama_wali','no_telp_wali','hubungan_wali'
    ];
    public function peserta(){
        return $this->belongsTo("App\Peserta");
    }
}
