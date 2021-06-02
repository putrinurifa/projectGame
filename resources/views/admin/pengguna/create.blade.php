@extends('adminlte::page')

@section('title', 'Tambah Pengguna')

@section('content_header')
    <h1>Tambah Pengguna</h1>
@stop

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card card-success" style="width: 34rem;">
            <div class="card-header">
                Tambah Pengguna
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
                <form method="post" action="{{ route('pengguna.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control" id="name" aria-describedby="name" value="{{old("name")}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="email" value="{{old("email")}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            aria-describedby="password" value="{{old("password")}}">
                    </div>
                    <div class="form-group">
                        <label for="skor">Skor</label>
                        <input type="skor" name="skor" class="form-control" id="skor" aria-describedby="skor" value="0">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" class="form-control" id="role">
                                <option value="admin">Admin</option>
                                <option value="player">Player</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection