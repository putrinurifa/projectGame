@extends('layouts.master')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <header id="header" class="header-transparent">
        <div class="container">

            <div id="back" class="pull-right">
                <h2>
                    <a href="/kategori" class="btn-back">
                        <</a>
                </h2>
                <a href="/leaderboard" class="leaderboard"><i class="fa fa-trophy"></i></a>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero-kategori">
        <div class="hero-btn" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="btn-sedang">Sedang</a>
                </div>
            </div>
            @php
                $length = count($sedang);
                $data = [$length];
                for ($i = 0; $i < $length; $i++) {
                    $data[$i] = $sedang[$i]->no_soal;
                }
            @endphp
            <div class="row">
                @foreach (array_slice($data, 0, 3) as $item)
                    <div class="col-xl-4">
                        <a href="/gameSedang/{{ $item }}" class="btn-level-sedang">Level {{ $item }}</a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach (array_slice($data, 3, 6) as $item)
                    <div class="col-xl-4">
                        <a href="/gameSedang/{{ $item }}" class="btn-level-sedang">Level {{ $item }}</a>
                    </div>
                @endforeach
            </div>
            @if ($sedang->lastPage() > 1)
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation example" class="page">
                            <ul class="pagination justify-content-center">
                                @if ($sedang->onFirstPage())
                                    <li class="page-item disabled">
                                        <a class="page-link" href={{ $sedang->previousPageUrl() }}
                                            tabindex="-1">Previous</a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href={{ $sedang->previousPageUrl() }}
                                            tabindex="-1">Previous</a>
                                    </li>
                                @endif

                                @for ($i = 1; $i <= $sedang->lastPage(); $i++)
                                    @if ($i == $sedang->currentPage())
                                        <li class="page-item active"><a class="page-link"
                                                href="levelSedang?page={{ $i }}">{{ $i }}</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                                href="levelSedang?page={{ $i }}">{{ $i }}</a></li>
                                    @endif
                                @endfor
                                <li class="page-item">
                                    <a class="page-link" href={{ $sedang->nextPageUrl() }}>Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
