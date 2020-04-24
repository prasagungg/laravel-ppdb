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
                        <li class="breadcrumb-item active">Data Diri</li>
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
                    <form action="{{ route('peserta.store') }}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Jenis kelamin</label>
                                    <select class="form-control" name="jk">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Tempat lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir"
                                                name="tempat_lahir">
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" name="tanggal_lahir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama">
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="konghucu">konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Cita Cita</label>
                                        <input type="text" class="form-control" id="cita_cita" name="cita_cita">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Hobi</label>
                                            <input type="text" class="form-control" id="hobi" name="hobi">
                                        </div>
                                        <div class="col-6">
                                            <label>Golongan Darah</label>
                                            <select class="form-control" name="golongan_darah">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="O">O</option>
                                                <option value="AB">AB</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Tinggi Badan</label>
                                            <input type="text" class="form-control" id="tinggi_badan"
                                                name="tinggi_badan" placeholder="Masukan Dalam Bentuk CM">
                                        </div>
                                        <div class="col-6">
                                            <label>Berat Badan</label>
                                            <input type="text" class="form-control" id="berat_badan" name="berat_badan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="4" name="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>Propinsi</label>
                                            <input type="text" class="form-control" id="propinsi" name="propinsi">
                                        </div>
                                        <div class="col-3">
                                            <label>Kota/Kabupaten</label>
                                            <input type="text" class="form-control" id="kota_kabupaten"
                                                name="kota_kabupaten">
                                        </div>
                                        <div class="col-3">
                                            <label>Kecamatan</label>
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                        </div>
                                        <div class="col-3">
                                            <label>Kelurahan</label>
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                                        </div>
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
