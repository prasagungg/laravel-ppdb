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
                        <li class="breadcrumb-item active">Lampiran Berkas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="invoice p-3 mb-3 container-fluid">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-globe"></i> Daftar Ceria.
                    <small class="float-right">Tanggal: 25/04/2020</small>
                </h4>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <address>
                    <strong>Kepada</strong><br>
                    Nama : Agungprasetio<br>
                    Phone: 081339179955<br>
                    Email: agungprasetio878@gmail.com><br>
                    Mohon untuk membawa berkas 
                </address>
            </div>
            <!-- /.col -->
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Berkas</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Fotokopi Raport SMP Kelas 7-9 Semester 1</td>
                           
                        <tr>
                            <td>2</td>
                            <td>Fotokopi Akte Kelahiran</td>
                           
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fotokopi Kartu Keluarga</td>
                            
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Pas Photo Berwarna ( Berkemeja ) Ukuran : 3 x 4 ( 6 lembar</td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i>
                    Print</a>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                </button>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection
