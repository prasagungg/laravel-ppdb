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
                        <li class="breadcrumb-item active">Data Nilai Rapot</li>
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
                    <form action="{{ route('nilai.store') }}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <center><label>Pendidikan agama islam</label></center>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 1</label>
                                            <input type="text" class="form-control" id="pai_smt_satu" name="pai_smt_satu">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 2</label>
                                            <input type="text" class="form-control" id="pai_smt_dua" name="pai_smt_dua">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 3</label>
                                            <input type="text" class="form-control" id="pai_smt_tiga" name="pai_smt_tiga">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 4</label>
                                            <input type="text" class="form-control" id="pai_smt_empat"
                                                name="pai_smt_empat">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 5</label>
                                            <input type="text" class="form-control" id="pai_smt_lima"
                                                name="pai_smt_lima">
                                        </div>
                                        <div class="col-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label>Bahasa Indonesia</label></center>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 1</label>
                                            <input type="text" class="form-control" id="bindo_smt_satu" name="bindo_smt_satu">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 2</label>
                                            <input type="text" class="form-control" id="bindo_smt_dua"
                                                name="bindo_smt_dua">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 3</label>
                                            <input type="text" class="form-control" id="bindo_smt_tiga"
                                                name="bindo_smt_tiga">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 4</label>
                                            <input type="text" class="form-control" id="bindo_smt_empat"
                                                name="bindo_smt_empat">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 5</label>
                                            <input type="text" class="form-control" id="bindo_smt_lima"
                                                name="bindo_smt_lima">
                                        </div>
                                        <div class="col-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label>Bahasa Inggris</label></center>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 1</label>
                                            <input type="text" class="form-control" id="bing_smt_satu" name="bing_smt_satu">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 2</label>
                                            <input type="text" class="form-control" id="bing_smt_dua"
                                                name="bing_smt_dua">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 3</label>
                                            <input type="text" class="form-control" id="bing_smt_tiga"
                                                name="bing_smt_tiga">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 4</label>
                                            <input type="text" class="form-control" id="bing_smt_empat"
                                                name="bing_smt_empat">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 5</label>
                                            <input type="text" class="form-control" id="bing_smt_lima"
                                                name="bing_smt_lima">
                                        </div>
                                        <div class="col-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label>Matematika</label></center>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 1</label>
                                            <input type="text" class="form-control" id="mtk_smt_satu" name="mtk_smt_satu">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 2</label>
                                            <input type="text" class="form-control" id="mtk_smt_dua"
                                                name="mtk_smt_dua">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 3</label>
                                            <input type="text" class="form-control" id="mtk_smt_tiga"
                                                name="mtk_smt_tiga">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 4</label>
                                            <input type="text" class="form-control" id="mtk_smt_empat"
                                                name="mtk_smt_empat">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 5</label>
                                            <input type="text" class="form-control" id="mtk_smt_lima"
                                                name="mtk_smt_lima">
                                        </div>
                                        <div class="col-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label>Ilmu pengetahuan Alam</label></center>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 1</label>
                                            <input type="text" class="form-control" id="ipa_smt_satu" name="ipa_smt_satu">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 2</label>
                                            <input type="text" class="form-control" id="ipa_smt_dua"
                                                name="ipa_smt_dua">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 3</label>
                                            <input type="text" class="form-control" id="ipa_smt_tiga"
                                                name="ipa_smt_tiga">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 4</label>
                                            <input type="text" class="form-control" id="ipa_smt_empat"
                                                name="ipa_smt_empat">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 5</label>
                                            <input type="text" class="form-control" id="ipa_smt_lima"
                                                name="ipa_smt_lima">
                                        </div>
                                        <div class="col-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label>Ilmu pengetahuan Sosial</label></center>
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 1</label>
                                            <input type="text" class="form-control" id="ips_smt_satu" name="ips_smt_satu">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 2</label>
                                            <input type="text" class="form-control" id="ips_smt_dua"
                                                name="ips_smt_dua">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 3</label>
                                            <input type="text" class="form-control" id="ips_smt_tiga"
                                                name="ips_smt_tiga">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 4</label>
                                            <input type="text" class="form-control" id="ips_smt_empat"
                                                name="ips_smt_empat">
                                        </div>
                                        <div class="col-2">
                                            <label>Semester 5</label>
                                            <input type="text" class="form-control" id="ips_smt_lima"
                                                name="ips_smt_lima">
                                        </div>
                                        <div class="col-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-10">
                                            <label>Prestasi Yang Pernah Di raih (optional)</label>
                                            <input type="text" class="form-control" id="prestasi" name="prestasi">
                                            <input type="hidden" class="form-control" value="{{$peserta_id}}" name="peserta_id">
                                        </div>
                                        <div class="col-1">
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
