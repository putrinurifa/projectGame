@extends('adminlte::page')

@section('title', 'Edit Soal')

@section('content_header')
    <h1>Edit Soal</h1>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#kategori').find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue == "Sedang") {
                    $("#image").hide();
                    $("#gambar").hide();
                    $("#gambarSoal").hide();
                    $("#pilih1").hide();
                    $("#pilih2").hide();
                    $("#pilih3").hide();
                    $("#pilihan1").hide();
                    $("#pilihan2").hide();
                    $("#pilihan3").hide();
                    $("#jawabanPilih").hide();
                    $("#jawaban").show();
                } else if (optionValue == "Sulit") {
                    $("#image").show();
                    $("#gambar").show();
                    $("#gambarSoal").show();
                    $("#pilih1").hide();
                    $("#pilih2").hide();
                    $("#pilih3").hide();
                    $("#pilihan1").hide();
                    $("#pilihan2").hide();
                    $("#pilihan3").hide();
                    $("#jawabanPilih").hide();
                    $("#jawaban").show();
                } else {
                    $("#image").hide();
                    $("#gambar").hide();
                    $("#gambarSoal").hide();
                    $("#pilih1").show();
                    $("#pilih2").show();
                    $("#pilih3").show();
                    $("#pilihan1").show();
                    $("#pilihan2").show();
                    $("#pilihan3").show();
                    $("#jawabanPilih").show();
                    $("#jawaban").hide();
                }
            });
        });

    </script>
@stop

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card card-primary" style="width: 34rem;">
                <div class="card-header">
                    Edit Soal
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('soal.update', $game->id) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control" id="kategori">
                                <option value="{{$game->kategori}}">{{$game->kategori}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_soal">No_Soal</label>
                            <input type="no_soal" name="no_soal" class="form-control" id="no_soal"
                                aria-describedby="no_soal" value="{{ $game->no_soal }}">
                        </div>
                        <div class="form-group">
                            <label for="soal">Soal</label>
                            <input type="soal" name="soal" class="form-control" id="soal" aria-describedby="soal"
                                value="{{ $game->soal }}">
                        </div>
                        <div class="form-group">
                            <label for="pilihan1" id="pilih1">Pilihan 1</label>
                            <input type="pilihan1" name="pilihan1" class="form-control" id="pilihan1"
                                aria-describedby="pilihan1" value="{{ $game->pilihan1 }}">
                        </div>
                        <div class="form-group">
                            <label for="pilihan2" id="pilih2">Pilihan 2</label>
                            <input type="pilihan2" name="pilihan2" class="form-control" id="pilihan2"
                                aria-describedby="pilihan2" value="{{ $game->pilihan2 }}">
                        </div>
                        <div class="form-group">
                            <label for="pilihan3" id="pilih3">Pilihan 3</label>
                            <input type="pilihan3" name="pilihan3" class="form-control" id="pilihan3"
                                aria-describedby="pilihan3" value="{{ $game->pilihan3 }}">
                        </div>
                        <div class="form-group">
                            <label for="jawaban">jawaban</label>
                            <select name="jawabanPilih" class="form-control" id="jawabanPilih">
                                @php
                                    $collection = ['Pilihan 1' => 'pilihan1', 'Pilihan 2' => 'pilihan2', 'Pilihan 3' => 'pilihan3'];
                                @endphp
                                @foreach ($collection as $jawaban => $val)
                                    <option value="{{ $val }}" {{ $game->jawaban == $val ? 'selected' : '' }}>
                                        {{ $jawaban }}
                                    </option>
                                @endforeach
                            </select>
                            <input type="jawaban" name="jawaban" class="form-control" id="jawaban"
                                aria-describedby="jawaban" value="{{ $game->jawaban }}">
                        </div>
                        <div class="form-group">
                            <label for="skor">Skor</label>
                            <input type="skor" name="skor" class="form-control" id="skor" aria-describedby="skor"
                                value="{{ $game->skor }}">
                        </div>
                        <div class="form-group">
                            <label for="image" id="gambar">Gambar Soal</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image"
                                value="{{ $game->image }}">
                            <img style="max-height: 100px; max-width: 100px;" id="gambarSoal"
                                src="{{ asset('images/' . $game->image) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
