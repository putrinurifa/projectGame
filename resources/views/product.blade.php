@extends('layouts.app')

@section('statusProduct')
    {{ $status }}
@endsection

@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Daftar Halaman Product</h4>
                            <h2><i><u>iStudy<u></i></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @php
    $gambar = ['gambar0.png', 'gambar1.png', 'gambar5.png', 'gambar6.png', 'gambar7.png', 'gambar8.png'];
    $keterangan = ['Halaman awal game', 'Halaman memilih kategori game', 'Halaman bermain soal mudah', 'Halaman bermain soal sedang', 'Halaman bermain soal sulit', 'Halaman leaderboard pemain'];
    $title = ['Halaman Utama', 'Halaman Kategori', 'Halaman Soal Mudah', 'Halaman Soal Sedang', 'Halaman Soal Sulit', 'Halaman Leaderboard'];
    $url = ['/utama', '/kategori', '/levelMudah', '/levelSedang', '/levelSulit', '/leaderboard'];
    @endphp
    <div class="row">
        <div class="container">
            @for ($i = 0; $i < 6; $i++)
                <a href="/product/detail/{{ $i }}" class="detailProduct">
                    <div class="card product" style="width: 18rem; height: 18rem; float: left; margin: 40px;">
                        <img src="/images/{{ $gambar[$i] }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $title[$i] }}</h5>
                            <p class="card-text">{{ $keterangan[$i] }}</p>
                            @guest

                            @else
                                <a href="{{$url[$i]}}" class="btn btn-light">Coba</a>
                            @endguest
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
@endsection
