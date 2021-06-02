@extends('adminlte::page')

@section('title', 'Tambah pengguna')

@section('content_header')
    <h1>Edit pengguna</h1>
@stop

@section('content')
<div class="container mt-5">

<div class="row justify-content-center align-items-center">
    <div class="card card-primary" style="width: 34rem;">
        <div class="card-header">
            Edit pengguna
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
            <form method="post" action="{{ route('pengguna.update', $pengguna->id) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $pengguna->name }}"
                        aria-describedby="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email"
                        value="{{ $pengguna->email }}" aria-describedby="email">
                </div>
                <div class="form-group">
                    <label for="skor">Skor</label>
                    <input type="skor" name="skor" class="form-control" id="skor"
                        value="{{ $pengguna->skor }}" aria-describedby="skor">
                </div>
                
                <div class="form-group">
                    <label for="role">role</label>
                    <select name="role" class="form-control" id="role">
                        <option value="{{$pengguna->role}}" selected>{{$pengguna->role}}</option>
                        @if ($pengguna->role == 'admin')
                            <option value="player">Player</option>
                        @else
                            <option value="admin">Admin</option>
                        @endif
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