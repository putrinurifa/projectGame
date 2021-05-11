@extends('layouts.master')

@section('content')
<body>
    <header id="header" class="header-transparent">
        <div class="container">

            <div id="back" class="pull-right">
                <h2>
                    <a href="/kategori" class="btn-back"><</a>
                </h2>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero-kategori">
        <div class="hero-btn" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="btn-mudah">Mudah</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <a href="/gameMudah/1" class="btn-level-mudah">Level 1</a>
                </div>
                <div class="col-xl-4">
                    <a href="/gameMudah/2" class="btn-level-mudah">Level 2</a>
                </div>
                <div class="col-xl-4">
                    <a href="/gameMudah/3" class="btn-level-mudah">Level 3</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <a href="/gameMudah/4" class="btn-level-mudah">Level 4</a>
                </div>
                <div class="col-xl-4">
                    <a href="/gameMudah/5" class="btn-level-mudah">Level 5</a>
                </div>
                <div class="col-xl-4">
                    <a href="/gameMudah/6" class="btn-level-mudah">Level 6</a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection