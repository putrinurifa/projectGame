@extends('layouts.app')

@section('statusProduct')
    {{ $status }}
@endsection

@section('content')

    <head>
        <style>
            .back {
                font-family: "Poppins", sans-serif;
                text-decoration: none;
                font-weight: 100;
                font-size: 20px;
                letter-spacing: 1px;
                display: inline-block;
                padding: 0px 10px;
                border-radius: 5px;
                transition: 0.5s;
                margin: 20px 10px;
                background: #F48840;
                border: 2px solid rgb(255, 253, 253);
                color: black;
            }

            .back:hover {
                background: #a74d11;
                border: 2px solid #a74d11;
                color: #fff;
            }
        </style>
    </head>
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Halaman Detail Product</h4>
                            <h2>iStudy</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @php
    $title = ['Detail Halaman Utama', 'Detail Halaman'];
    $detail = [
        "Halaman awal game dimana Player dapat mengatur audio, music, nickname dan keluar dari game.
                            Player dapat masuk kedalam halaman game dengan menekan tombol merah atau tombol PLAY",
        "Halaman kategori game dimana Player memiliki 3 kategori yaitu mudah, sedang, dan sulit. Untuk mengerjakan 
                        soal di game, Player dapat memilih tingkat kesulitan yang akan dikerjakan dari 3 kategori tersebut. 
                        Setiap level memiliki beberapa soal yang mana tingkat kesulitan berdasarkan kategori yang dipilih. 
                        Setelah player memilih kategori, player dapat memulai permainan dengan klik level yang dipilih.",
        "Pada halaman ini disajikan soal dengan kategori mudah yaitu dengan menjawab soal dengan memilih pilihan jawaban
                        yang telah disediakan. Soal yang disajikan dapat berupa pertanyaan, soal cerita, atau gambar. Terdapat tiga
                        pilihan jawaban, pemain harus memilih jawaban yang paling tepat dengan waktu yang singkat agar 
                        mendapat poin yang tinggi.",
        "Pada halaman ini disajikan soal dengan kategori sedang yaitu dengan menjawab soal dengan memilih huruf yang telah disediakan. 
                        Soal yang disajikan dapat berupa pertanyaan, soal cerita, atau gambar. Terdapat beberapa kotak untuk diisi sesuai dengan kotak 
                        huruf yang disediakan, pemain harus merangkai huruf yang disediakan dengan tepat sesuai jawaban dari soal waktu yang singkat agar 
                        mendapat poin yang tinggi.",
        "Pada halaman ini disajikan soal dengan kategori sulit yaitu menebak gambar dari soal dan mengisi jawaban
                        secara langsung pada box yang telah disediakan. Pemain dapat klik tombol ok jika sudah mengisi jawaban. Pemain menebak gambar dengan tepat 
                        dengan waktu yang singkat agar mendapat poin yang tinggi.",
        "Halaman Leaderboard akan muncul jika pemain telah menyelesaikan permainan pada satu kategori. Pada halaman ini pemain dapat melihat ranking dari akurasi skor 
                        yang didapat.",
    ];
    $gambar = ['gambar0.png', 'gambar1.png', 'gambar5.png', 'gambar6.png', 'gambar7.png', 'gambar8.png'];
    $img = ['gambar2.png', 'gambar3.png', 'gambar4.png'];
    @endphp
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Detail Halaman Game</h2><br>
                <img src="/images/{{ $gambar[$id] }}" alt=""><br><br>
                @if ($id == 1)
                    <br>
                    <h5>Halaman Kategori Game Mudah</h5><br>
                    <img src="/images/{{ $img[0] }}" alt=""><br>
                    <br>
                    <h5>Halaman Kategori Game Sedang</h5><br>
                    <img src="/images/{{ $img[1] }}" alt=""><br>
                    <br>
                    <h5>Halaman Kategori Game Sulit</h5><br>
                    <img src="/images/{{ $img[2] }}" alt=""><br><br>
                @endif
                <p>{{ $detail[$id] }}</p>
            </div>
            <a href="/product" class="back">Kembali</a>
        </div>
    </div>
@endsection
