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
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row justify-content-center">
                <section class="col-lg-9 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">IDENTITAS</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <p><b>Program Studi : </b>{{ Auth::user()->prodi->nama }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-list-ul mr-1"></i>
                                Identitas Pengusul
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/lkps/view/101">Isi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-list-ul mr-1"></i>
                                Daftar Program Studi di Unit Pengelola Program Studi (UPPS)
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/lkps/view/102">Isi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">Kriteria kinerja</h3>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    @if (array_key_exists(2, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    2. Tata Pamong, Tata Kelola, dan Kerjasama
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[2][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (array_key_exists(3, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    3. Mahasiswa
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[3][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (array_key_exists(4, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    4. Sumber Daya Manusia
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[4][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (array_key_exists(5, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    5. Keuangan, Sarana, dan Prasarana
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[5][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (array_key_exists(6, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    6. Pendidikan
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[6][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (array_key_exists(7, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    7. Penelitian
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[7][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (array_key_exists(8, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    8. Pengabdian kepada Masyarakat (PkM)
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[8][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (array_key_exists(9, $tables))
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list-ul mr-1"></i>
                                    9. Luaran dan Capaian Tridharma
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/lkps/view/{{ $tables[9][0] }}">Isi
                                                kriteria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </section>
            </div>
        </div>
    </div>
@endsection
