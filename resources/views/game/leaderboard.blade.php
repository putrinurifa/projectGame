@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="/css/style.css">
    <header id="header" class="header-transparent">
        <div class="container">

            <div id="back" class="pull-right">
                <h2>
                    <a href="/kategori" class="btn-back">
                        <</a>
                </h2>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero-leaderboard">
        <div class="hero-board" data-aos="zoom-in" data-aos-delay="100">
            <div class="leaderboard">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <h2>Leaderboard</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @php
                            $length = count($leaderboard);
                        @endphp
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Skor</th>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < $length; $i++)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $leaderboard[$i]->name }}</td>
                                            <td>{{ $leaderboard[$i]->email }}</td>
                                            <td>{{ $leaderboard[$i]->skor }}</td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
