@extends('layouts.app')

@section('statusHome')
    {{$status}}
@endsection

@section('content')
<style type="text/css">
  #hero {
    width: 100%;
    height: 100vh;
    background: url("../images/gambar0.png") top center;
    background-size: cover;
    position: relative;
    padding: 0;
  }

  #hero:before {
    content: "";
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }

  #hero .container {
    padding-top: 110px;
  }

  @media (max-width: 992px) {
    #hero .container {
      padding-top: 98px;
    }
  }

  #hero h1 {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: #fff;
    font-family: "Poppins", sans-serif;
  }

  #hero h1 span {
    color: #cda45e;
  }

  #hero h2 {
    color: #eee;
    margin-bottom: 10px 0 0 0;
    font-size: 22px;
  }

  .about {
    background: url("../images/gambar3.png") center center;
    background-size: cover;
    position: relative;
    padding: 80px 0;
  }

  .about:before {
    content: "";
    background: rgba(0, 0, 0, 0.4);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }

  .about .about-img {
    position: relative;
    transition: .5s;
  }

  .about .about-img img {
    max-width: 100%;
    border: 4px solid rgba(255, 255, 255, 0.2);
    position: relative;
  }

  .about .about-img::before {
    position: absolute;
    left: 20px;
    top: 20px;
    width: 60px;
    height: 60px;
    z-index: 1;
    content: '';
    border-left: 5px solid #cda45e;
    border-top: 5px solid #cda45e;
    transition: .5s;
  }

  .about .about-img::after {
    position: absolute;
    right: 20px;
    bottom: 20px;
    width: 60px;
    height: 60px;
    z-index: 2;
    content: '';
    border-right: 5px solid #cda45e;
    border-bottom: 5px solid #cda45e;
    transition: .5s;
  }


  @media (min-width: 1024px) {
    .about {
      background-attachment: fixed;
    }
  }
</style>
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
    $gambar = ['gambar0.png', 'gambar1.png', 'gambar5.png', 'gambar6.png', 'gambar7.png', 'gambar8.png'];
    $keterangan = ['Halaman awal game', 'Halaman memilih kategori game', 'Halaman bermain soal mudah', 
    'Halaman bermain soal sedang', 'Halaman bermain soal sulit', 'Halaman leaderboard pemain'];
    $title = ['Halaman Utama', 'Halaman Kategori', 'Halaman Soal Mudah', 'Halaman Soal Sedang', 'Halaman Soal Sulit', 'Halaman Leaderboard'];
    @endphp
    <div class="row">
        <div class="container">
            @for ($i = 0; $i < 6; $i++)
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
              <img src="../images/gambar8.png" alt="">
            </div>
          </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            </div>
        </div>
      </div>
    </section><!-- End About Section -->
@endsection