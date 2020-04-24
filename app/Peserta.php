<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $fillable = [
        'nama_lengkap','jk','tempat_lahir','tanggal_lahir','cita_cita','hobi','berat_badan','tinggi_badan','golongan_darah','alamat','kelurahan','kecamatan','kota_kabupaten','propinsi','no_tlp_rumah','tinggal_dengan','penyakit','email'
    ];
    public function orangtua(){
        return $this->hasOne('App/Orangtua');
    }
    
    public function nilai(){
        return $this->hasOne('App/Nilai');
    }
    
    public function berkas(){
        return $this->hasOne('App/Berkas');
    }
}
