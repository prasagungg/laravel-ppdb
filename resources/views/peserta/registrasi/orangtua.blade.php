@extends('layouts.peserta.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pendaftaraan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Orang Tua</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Biodata</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <form action="{{ route('orangtua.store') }}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>1. Ayah</label>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap_ayah" name="nama_lengkap_ayah">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Tempat lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir_ayah"
                                                name="tempat_lahir_ayah">
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" name="tanggal_lahir_ayah">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="pendidikan_terakhir_ayah" name="pendidikan_terakhir_ayah">
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" class="form-control" id="kewarganegaraan_ayah" name="kewarganegaraan_ayah">
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama_ayah">
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="konghucu">konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telephone</label>
                                        <input type="text" class="form-control" id="no_telp_ayah" name="no_telp_ayah">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>2. Ibu</label>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap_ibu" name="nama_lengkap_ibu">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Tempat lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir_ibu"
                                                name="tempat_lahir_ibu">
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" name="tanggal_lahir_ibu">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="pendidikan_terakhir_ibu" name="pendidikan_terakhir_ibu">
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" class="form-control" id="kewarganegaraan_ibu" name="kewarganegaraan_ibu">
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama_ibu">
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="konghucu">konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telephone</label>
                                        <input type="text" class="form-control" id="no_telp_ibu" name="no_telp_ibu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>3. Wali (optional) </label>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap_wali" name="nama_lengkap_wali">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Tempat lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir_wali"
                                                name="tempat_lahir_wali">
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" name="tanggal_lahir_wali">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="pendidikan_terakhir_wali" name="pendidikan_terakhir_wali">
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" class="form-control" id="kewarganegaraan_wali" name="kewarganegaraan_wali">
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama_wali">
                                            <option>Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="konghucu">konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telephone</label>
                                        <input type="text" class="form-control" id="no_telp_wali" name="no_telp_wali">
                                    </div>
                                    <div class="form-group">
                                        <label>Hubungan Dengan Wali</label>
                                        <input type="text" class="form-control" id="hubungan_wali" name="hubungan_wali">
                                        <input type="hidden" value="{{$peserta_id}}" name="peserta_id">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>
@endsection
