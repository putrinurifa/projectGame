@extends('adminlte::page')

@section('title', 'Leaderboard')

@section('content_header')
    <h1>Leaderboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Leaderboard Table</h3>
                </div>

                @php
                    $length = count($leaderboard);
                @endphp
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Skor</th>
                            </tr>
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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-12">
            <nav aria-label="Page navigation example" class="page">
                <ul class="pagination justify-content-center">
                    @if ($leaderboard->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href={{ $leaderboard->previousPageUrl() }} tabindex="-1">Previous</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href={{ $leaderboard->previousPageUrl() }} tabindex="-1">Previous</a>
                        </li>
                    @endif

                    @for ($i = 1; $i <= $leaderboard->lastPage(); $i++)
                        @if ($i == $leaderboard->currentPage())
                            <li class="page-item active"><a class="page-link"
                                    href="leaderboard?page={{ $i }}">{{ $i }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="leaderboard?page={{ $i }}">{{ $i }}</a></li>
                        @endif
                    @endfor
                    <li class="page-item">
                        <a class="page-link" href={{ $leaderboard->nextPageUrl() }}>Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
@stop
