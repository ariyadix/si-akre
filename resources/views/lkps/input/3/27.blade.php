@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
<div class="col-sm-6">
    <h1 class="m-0">Input Data</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Lembar Kinerja Program Studi</li>
    </ol>
</div><!-- /.col -->
@endsection
@section('content')
<section class="content">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p><b>Kriteria : </b>3. Sumber Daya Manusia</p>
                </div>
                <div class="col-12 col-lg-6">
                    <p><b>Sub-kriteria : </b>b. Kinerja Dosen
                    </p>
                    <p><b>Tabel : </b>3.b.7) Luaran Penelitian/PkM Lainnya oleh DTPS 
                    </p>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        {{-- <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
            <a class="btn btn-info disabled" href="#"><i class="fas fa-arrow-circle-left"></i> Prev</a>
            <a class="btn btn-success" href="/lkps/view/211">Next <i class="fas fa-arrow-circle-right"></i></a>
        </div> --}}

    </div>


    <!-- /.card -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tabel 3.b.7) Luaran Penelitian/PkM Lainnya oleh DTPS 
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/lkps/view/327">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Luaran penelitian dan PKM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Tahun</label>
                  <div class="col-sm-1">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="">
                  </div>
              </div>
              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="/lkps/view/327" class="btn btn-default float-right">Cancel</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</section>
@endsection

@section('script')
<script>
    $(function () {
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
    })
</script>
@endsection