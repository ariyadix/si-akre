@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Edit Profile</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/profile">Profile</a></li>
            <li class="breadcrumb-item active">Change Password</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="card p-4">
        <form name="frmUserUpdt" method="POST" enctype="multipart/form-data" action="/dosen/profile/update-credential">
            @csrf
            <div class="col-xs-5">
                {{-- <div class="row mt-2">
                                                <div class="col-md-7"><label
                                                        class="labels">E-Mail</label><input name="email" type="text"
                                                        class="form-control" value="" readonly="readonly">
                                                </div>
                                            </div> --}}
                <div class="row mt-2">
                    <div class="col-md-7"><label class="labels">Konfirmasi
                            Password</label><input name="oldpass" type="password"
                            class="form-control @error('oldpass') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('oldpass')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-md-7"><label class="labels">Password
                            Baru</label><input name="newpass" type="password"
                            class="form-control @error('newpass') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('newpass')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-md-7"><label class="labels">Re-type
                            Password
                            Baru</label><input name="newpass2" type="password"
                            class="form-control @error('newpass2') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('newpass2')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>
                {{-- <div class="col-md-6"><label class="labels">Tempat
                                                    Lahir</label><input type="text"
                                                    class="form-control @error('birthplace') is-invalid @enderror"
                                                    value="{{ $dosen->tmp_lahir }}" placeholder="" name="birthplace">
                                                <div class="invalid-feedback">
                                                    @error('birthplace')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div> --}}
            </div>
            <div class="mt-5 text-left">
                {{-- <button class="btn btn-success profile-button" name="save_password"
                                                type="submit" form="userUpdt" type="submit" value="save_password"><i
                                                    class="fas fa-user-cog"></i> Simpan</button> --}}
                <button class="btn btn-success profile-button" name="save_record" type="submit" value="save_record"><i
                        class="far fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>


@endsection
