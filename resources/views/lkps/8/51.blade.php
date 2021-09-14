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
                        <p><b>Sub-kriteria : </b>e. Kinerja Lulusan</p>
                        <p><b>Tabel : </b>8.e.1 Tempat Kerja Lulusan </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                <a class="btn btn-info" href="/lkps/view/842"><i class="fas fa-arrow-circle-left"></i> Prev</a>
                <a class="btn btn-success" href="/lkps/view/852">Next <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 8.e.1) Tempat Kerja Lulusan
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">Tahun
                                Lulus</th>
                            <th rowspan="2">Jumlah
                                Lulusan</th>
                            <th rowspan="2">Jumlah
                                Lulusan
                                yang
                                Terlacak</th>
                            <th colspan="3">Jumlah Lulusan Terlacak yang Bekerja
                                berdasarkan Tingkat/Ukuran Tempat
                                Kerja/Berwirausaha
                            </th>
                        </tr>
                        <tr>
                            <th>Lokal/
                                Wilayah/
                                Berwirausaha
                                tidak Berizin</th>
                            <th>Nasional/
                                Berwirausaha
                                Berizin</th>
                            <th>Multinasiona/
                                Internasional
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                TS-4
                            </td>
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                TS-3
                            </td>
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                TS-2
                            </td>
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Jumlah</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/851"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
