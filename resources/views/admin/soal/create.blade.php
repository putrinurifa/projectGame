@extends('adminlte::page')

@section('title', 'Tambah Soal')

@section('content_header')
    <h1>Tambah Soal</h1>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $("#jawaban").hide();
            $("#image").hide();
            $("#gambar").hide();

            $("#kategori").change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue == "Sedang") {
                        $("#image").hide();
                        $("#gambar").hide();
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
        });

    </script>
@stop

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card card-success" style="width: 34rem;">
                <div class="card-header">
                    Tambah Soal
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
                    <form method="post" action="{{ route('soal.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control" id="kategori">
                                <option value="Mudah" id="mudah">Mudah</option>
                                <option value="Sedang" id="sedang">Sedang</option>
                                <option value="Sulit" id="sulit">Sulit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_soal">No_Soal</label>
                            <input type="no_soal" name="no_soal" class="form-control" id="no_soal"
                                aria-describedby="no_soal" value="{{ old('no_soal') }}">
                        </div>
                        <div class="form-group">
                            <label for="soal">Soal</label>
                            <input type="soal" name="soal" class="form-control" id="soal" aria-describedby="soal"
                                value="{{ old('soal') }}">
                        </div>
                        <div class="form-group">
                            <label for="pilihan1" id="pilih1">Pilihan 1</label>
                            <input type="pilihan1" name="pilihan1" class="form-control" id="pilihan1"
                                aria-describedby="pilihan1" value="{{ old('pilihan1') }}">
                        </div>
                        <div class="form-group">
                            <label for="pilihan2" id="pilih2">Pilihan 2</label>
                            <input type="pilihan2" name="pilihan2" class="form-control" id="pilihan2"
                                aria-describedby="pilihan2" value="{{ old('pilihan2') }}">
                        </div>
                        <div class="form-group">
                            <label for="pilihan3" id="pilih3">Pilihan 3</label>
                            <input type="pilihan3" name="pilihan3" class="form-control" id="pilihan3"
                                aria-describedby="pilihan3" value="{{ old('pilihan3') }}">
                        </div>
                        <div class="form-group">
                            <label for="jawaban">jawaban</label>
                            <select name="jawabanPilih" class="form-control" id="jawabanPilih">
                                <option value="pilihan1">Pilihan 1</option>
                                <option value="pilihan2">Pilihan 2</option>
                                <option value="pilihan3">Pilihan 3</option>
                            </select>
                            <input type="jawaban" name="jawaban" class="form-control" id="jawaban"
                                aria-describedby="jawaban" value="{{ old('jawaban') }}">
                        </div>
                        <div class="form-group">
                            <label for="skor">Skor</label>
                            <input type="skor" name="skor" class="form-control" id="skor" aria-describedby="skor"
                                value="{{ old('skor') }}">
                        </div>
                        <div class="form-group">
                            <label for="image" id="gambar">Gambar Soal</label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="image"
                                value="{{ old('image') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
