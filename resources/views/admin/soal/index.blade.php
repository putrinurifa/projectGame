@extends('adminlte::page')

@section('title', 'Manajemen Soal')

@section('js')
    <script>
        // display a modal (small modal)
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#smallModal').modal("show");
                    $('#smallBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
    </script>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Manajemen Soal</h2>
        </div>
        <div class="float-left my-4">
            <form action="/admin/search/" method="GET">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search soal...">
                    <button type="submit" class="btn btn-primary">
                        Search
                    </button>
                </div>
            </form>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('soal.create') }}"> Input Soal</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Kategori</th>
            <th>No_Soal</th>
            <th>Soal</th>
            <th>Jawaban</th>
            <th>Skor</th>
            <th width="320px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($game as $soal)
            <tr>

                <td>{{ $soal->kategori }}</td>
                <td>{{ $soal->no_soal }}</td>
                <td>{{ $soal->soal }}</td>
                <td>{{ $soal->jawaban }}</td>
                <td>{{$soal->skor}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('soal.show', $soal->id) }}"> <i
                        class="fas fa-eye"></i> Show</a> 

                    <a class="btn btn-primary" href="{{ route('soal.edit', $soal->id) }}"> <i
                            class="fas fa-pencil-alt"></i> Edit</a>

                    <a class="btn btn-danger" href="" data-toggle="modal" id="smallButton" data-target="#smallModal"
                        data-attr="/admin/deleteSoal/{{ $soal->id }}" title="Delete soal">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-md-12">
        <nav aria-label="Page navigation example" class="page">
            <ul class="pagination justify-content-center">
                @if ($game->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href={{ $game->previousPageUrl() }} tabindex="-1">Previous</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href={{ $game->previousPageUrl() }} tabindex="-1">Previous</a>
                    </li>
                @endif

                @for ($i = 1; $i <= $game->lastPage(); $i++)
                    @if ($i == $game->currentPage())
                        <li class="page-item active"><a class="page-link"
                                href="soal?page={{ $i }}">{{ $i }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link"
                                href="soal?page={{ $i }}">{{ $i }}</a></li>
                    @endif
                @endfor
                <li class="page-item">
                    <a class="page-link" href={{ $game->nextPageUrl() }}>Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- small modal -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>
                    <!-- the result to be displayed apply here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection