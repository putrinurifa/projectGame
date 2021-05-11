@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="/css/style.css">
    <header id="header" class="header-transparent">
        <div class="container">

            <div id="back" class="pull-right">
                <h2>
                    <a href="/levelMudah" class="btn-back">
                        <</a>
                </h2>
                <h2 id="status"></h2>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero-games">
        <div class="hero-game" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="soal">
                            <p>{{$mudah->soal}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <a href="/hasilMudah/{{Auth::user()->name}}/pilihan1/{{$mudah->id}}" class="btn-soal-mudah">{{$mudah->pilihan1}}</a>
                </div>
                <div class="col-xl-4">
                    <a href="/hasilMudah/{{Auth::user()->name}}/pilihan2/{{$mudah->id}}" class="btn-soal-mudah">{{$mudah->pilihan2}}</a>
                </div>
                <div class="col-xl-4">
                    <a href="/hasilMudah/{{Auth::user()->name}}/pilihan3/{{$mudah->id}}" class="btn-soal-mudah">{{$mudah->pilihan3}}</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/Javascript">
        //120 detik
        const timer = 31;
        var count = timer;

        startClock();
        function startClock() {
            if (count > 0) {
                count -= 1;
            }
            document.getElementById("status").innerHTML = count;
            setTimeout("startClock()", 1000);

            if (count == 0) {
                window.location = "/habis";
                //count=0;
            }
        }

    </script>
@endsection
