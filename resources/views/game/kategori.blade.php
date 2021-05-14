@extends('layouts.master')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <header id="header" class="header-transparent">
            <div class="container">

                <div id="back" class="pull-right">
                    <h2>
                        <a href="/product" class="btn-back"><</a>
                    </h2>
                    <a href="/leaderboard" class="leaderboard"><i class="fa fa-trophy"></i></a>
                </div>
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <div id="hero-kategori">
            <div class="hero-btn" data-aos="zoom-in" data-aos-delay="100">
                <a href="/levelMudah" class="btn-mudah">Mudah</a>
                <a href="/levelSedang" class="btn-sedang">sedang</a>
                <a href="/levelSulit" class="btn-sulit">Sulit</a>
            </div>
        </div>
@endsection
