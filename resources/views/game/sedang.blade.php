@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="/css/style.css">
    <header id="header" class="header-transparent">
        <div class="container">

            <div id="back" class="pull-right">
                <h2>
                    <a href="/levelSedang" class="btn-back">
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
                            <p>{{$sedang->soal}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/hasilSedang" method="post">
                @csrf
                <div class="row">
                    <div class="col-xl-9">
                        <input type="text" name="jawaban" class="form-control" id="jawaban" placeholder="Jawaban"> 
                        <input type="text" name="username" id="username" class="form-control" value="{{Auth::user()->name}}">
                        <input type="text" name="nomor" id="nomor" class="form-control" value="{{$sedang->no_soal}}">
                    </div>
                    <div class="col-xl-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/Javascript">

        //120 detik
        const timer = 31;
        var count = timer;

        startClock();
        function startClock() {
            document.getElementById("username").style.visibility = "hidden";
            document.getElementById("nomor").style.visibility = "hidden";
            if (count > 0) {
                count -= 1;
            }
            document.getElementById("status").innerHTML = count;
            setTimeout("startClock()", 1000);

            if (count == 0) {
                window.location = "/habisSedang";
                //count=0;
            }
        }

    </script>
@endsection
