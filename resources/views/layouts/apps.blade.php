<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SI - Akre | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @if (request()->is('penilaian/*'))
        <link href="{{ asset('css/penilaian.css') }}" rel="stylesheet">
    @endif

    @if (request()->is('lkps/*'))
        <link href="{{ asset('css/lkps.css') }}" rel="stylesheet">
    @endif
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body class="hold-transition sidebar-mini {{ request()->is('/') ? 'sidebar-collapse' : '' }}">
    <div class="wrapper">

        @include('layouts.navigation')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        @yield('header')
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                .
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="#">SI - Akre</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ mix('js/all.min.js') }}"></script>
    @stack('scripts')


</body>
</html>
