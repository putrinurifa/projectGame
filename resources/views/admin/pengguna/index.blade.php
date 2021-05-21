@extends('adminlte::page')

@section('title', 'Manajemen Pengguna')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Manajemen Pengguna</h2>
        </div>
        <div class="float-left my-4">
            <form action="#" method="GET">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search users...">
                    <button type="submit" class="btn btn-primary">
                        Search
                    </button>
                </div>
            </form>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('pengguna.create') }}"> Input Pengguna</a>
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
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th width="320px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $pengguna)
            <tr>

                <td>{{ $pengguna->id }}</td>
                <td>{{ $pengguna->name }}</td>
                <td>{{ $pengguna->email }}</td>
                <td>{{ $pengguna->role }}</td>
                <td>
                    <form action="{{ route('pengguna.destroy', $pengguna->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('pengguna.show', $pengguna->id) }}"> <i class="fas fa-folder"></i> Show</a>

                        <a class="btn btn-primary" href="{{ route('pengguna.edit', $pengguna->id) }}"> <i class="fas fa-pencil-alt"></i> Edit</a>

                        @csrf
                        @method('DELETE')

                        {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        <a class="btn btn-warning" href="/pengguna/nilai/{{$pengguna->id}}">Nilai</a> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModalCenter"> <i class="fas fa-trash"></i>
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Pengguna</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Yakin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col-md-12">
        <nav aria-label="Page navigation example" class="page">
            <ul class="pagination justify-content-center">
                @if ($user->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href={{ $user->previousPageUrl() }} tabindex="-1">Previous</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href={{ $user->previousPageUrl() }} tabindex="-1">Previous</a>
                    </li>
                @endif

                @for ($i = 1; $i <= $user->lastPage(); $i++)
                    @if ($i == $user->currentPage())
                        <li class="page-item active"><a class="page-link"
                                href="user?page={{ $i }}">{{ $i }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link"
                                href="user?page={{ $i }}">{{ $i }}</a></li>
                    @endif
                @endfor
                <li class="page-item">
                    <a class="page-link" href={{ $user->nextPageUrl() }}>Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection