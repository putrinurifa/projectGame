@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Hello {{ $user->name }}</h1>
    <p>Selamat datang di Halaman admin</p>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css"
        integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg=="
        crossorigin="anonymous" />
@stop

@section('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src='fullcalendar/main.js'></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"
        integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA=="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });

    </script>
@stop

@section('content')
    @php
    $playerLength = count($player);
    $mudahLength = count($mudah);
    $sedangLength = count($sedang);
    $sulitLength = count($sulit);
    @endphp
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $playerLength }}</h3>

                    <p>Players</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <a href="/admin/cari/?keyword=player" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $mudahLength }}</h3>

                    <p>Kategori Mudah</p>
                </div>
                <div class="icon">
                    <i class="fab fa-etsy"></i>
                </div>
                <a href="/admin/search/?keyword=Mudah" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $sedangLength }}</h3>

                    <p>Kategori Sedang</p>
                </div>
                <div class="icon">
                    <i class="fab fa-medium-m"></i>
                </div>
                <a href="/admin/search/?keyword=Sedang" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $sulitLength }}</h3>

                    <p>Kategori Sulit</p>
                </div>
                <div class="icon">
                    <i class="fab fa-stripe-s"></i>
                </div>
                <a href="/admin/search/?keyword=Sulit" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    {{-- calendar --}}
    <div class="card bg-gradient-success">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

            <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
                <!-- button with a dropdown -->
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%">

            </div>
        </div>
        <!-- /.card-body -->
    </div>
@stop
