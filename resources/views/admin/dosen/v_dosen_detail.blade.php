@extends('layouts.apps')
@section('title', 'Dosen {{ $dosen->nama }}')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Detail Dosen</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/dosen">Dosen</a></li>
            <li class="breadcrumb-item active">{{ $dosen->nama }}</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif<!-- /.container-fluid -->

    <!-- Main content -->
    <div class="card p-4">
        <div>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card " style="height: 100%">
                        <div class="card-body" style="padding-top:3rem">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ url('img/dos/' . $dosen->img_url) }}" alt="Foto" class="rounded-circle"
                                    width="150">
                                <div class="mt-3">
                                    <h4>{{ $dosen->nama }}</h4>
                                    <p class="text-secondary mb-1">{{ $dosen->user->username }}</p>
                                    <p class="text-muted font-size-sm">
                                        <i class="fas fa-university">
                                        </i> {{ $dosen->prodi->nama }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="nav nav-pills" id="mytab">
                        <li class="nav-item">
                            <a href="#biodata" data-toggle="tab" class="nav-link m-l active" aria-expanded="true"
                                data-target="#biodata">Biodata
                                Pribadi</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="panel tab-pane wrapper-lg active " id="biodata">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nama Lengkap</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $dosen->nama }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tempat Tanggal Lahir</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $dosen->tmp_lahir }} , {{ $dosen->tgl_lahir }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Alamat</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $dosen->alamat }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mt-5 text-left">
                                                <a class="btn btn-secondary"
                                                    href='/manage/dosen/edit/{{ $dosen->id }}'><i
                                                        class="far fa-edit"></i> Edit Profile</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mt-5 text-left">
                                                <a class="btn btn-warning"
                                                    href='/manage/dosen/edit-password/{{ $dosen->id }}'><i
                                                        class="fas fa-key"></i> Change Password</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
