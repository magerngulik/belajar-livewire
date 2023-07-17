@extends('layouts.master')

@section('content')
    <div class="container mt-3">
        <h1>Detail Users</h1>
        <div class="mb-3">
            <label for="name">name</label>
            <input type="text" class="form-control" value="{{ $users->name }}">
        </div>
        <div class="mb-3">
            <label for="name">email</label>
            <input type="text" class="form-control" value="{{ $users->email }}">
        </div>
        <a href="{{ route('user.home') }}" class="btn btn-primary">Kembali</a>
    </div>  
 @endsection