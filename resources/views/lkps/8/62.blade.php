@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Laporan Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>8. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>f. Luaran Penelitian dan PkM Mahasiswa</p>
                        <p><b>Tabel : </b>8.f.2 Karya ilmiah mahasiswa yang disitasi</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                <a class="btn btn-info" href="/lkps/view/861"><i class="fas fa-arrow-circle-left"></i> Prev</a>
                <a class="btn btn-success" href="/lkps/view/863">Next <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 8.f.2) Karya ilmiah mahasiswa
                    yang disitasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mahasiswa</th>
                            <th>Judul Artikel yang Disitasi
                                (Jurnal/Buku, Volume, Tahun,
                                Nomor, Halaman) </th>
                            <th>Jumlah Sitasi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Jumlah</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/862"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
