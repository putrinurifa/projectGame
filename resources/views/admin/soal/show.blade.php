@extends('adminlte::page')

@section('title', 'Detail Soal')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 34rem;">
                <div class="card-header">
                    Detail Soal
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Kategori: </b>{{ $game->kategori }}</li>
                        <li class="list-group-item"><b>Nomor Soal: </b>{{ $game->no_soal }}</li>
                        <li class="list-group-item"><b>Soal: </b>{{ $game->soal }}</li>
                        @if ($game->kategori == 'Mudah')
                            <li class="list-group-item"><b>Pilihan 1: </b>{{ $game->pilihan1 }}</li>
                            <li class="list-group-item"><b>Pilihan 2: </b>{{ $game->pilihan2 }}</li>
                            <li class="list-group-item"><b>Pilihan 3: </b>{{ $game->pilihan3 }}</li>
                        @endif
                        @if ($game->kategori == 'Sulit')
                            <li class="list-group-item"><b>Gambar Soal: </b><br><img src="/images/{{ $game->image }}"
                                    style="max-height: 300px; max-width: 200px;"></li>
                        @endif
                        <li class="list-group-item"><b>Jawaban: </b>{{ $game->jawaban }}</li>
                        <li class="list-group-item"><b>Skor: </b>{{ $game->skor }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('soal.index') }}">Kembali</a>

            </div>
        </div>
    </div>
@endsection
