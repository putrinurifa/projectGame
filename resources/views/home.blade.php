@extends('layouts.app')

@section('statusHome')
    {{$status}}
@endsection

@section('content')
    <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h1>Welcome to <span>Game Education</span></h1>
            <h1>iStudy</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Latest Product</span>
                  <a href="product"><h4>View all Product</h4></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @php
    $gambar = ['gambar0.png', 'gambar1.png', 'gambar8.png'];
    $keterangan = ['Halaman awal game', 'Halaman memilih kategori game', 'Halaman leaderboard pemain'];
    $title = ['Halaman Utama', 'Halaman Kategori', 'Halaman Leaderboard'];
    @endphp
    <div class="row">
        <div class="container">
            @for ($i = 0; $i < 3; $i++)
                <a href="/product/detail/{{$i}}" class="detailProduct">
                    <div class="card product" style="width: 18rem; float: left; margin: 40px;">
                        <img src="/images/{{ $gambar[$i] }}" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5 class="card-title">{{ $title[$i] }}</h5>
                            <p class="card-text">{{$keterangan[$i]}}</p>
                          </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="../images/gambar6.png" alt="">
            </div>
          </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="../images/gambar7.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="../images/gambar5.png" alt="">
            </div>
          </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            </div>
        </div>
      </div>
    </section><!-- End About Section -->
    
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About iStudy</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="/product/detail/{{$i}}" target="detailProduct">Halaman Leaderboard</a> akan muncul jika pemain telah menyelesaikan permainan pada satu kategori. Pada halaman ini pemain dapat melihat ranking dari akurasi skor 
                     yang didapat<a rel="nofollow" href="about"> About Us</a> for more info.</p>
              <a href="product" class="btn btn-primary">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="images/gambar8.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection