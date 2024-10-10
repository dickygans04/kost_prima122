@extends('layout')

@section('konten')

<h4>edit akun</h4>

<form action="{{ route('akun.update', $akun->id)}}" method="post">
    @csrf
    <label>nama</label>
    <input type="text" id="nama" name="nama" value="{{$akun->nama}}" class="form-control mb-2">
    <label>nomor hp</label>
    <input type="number" id="nomor_hp" name="nomor_hp" value="{{$akun->nomor_hp}}" class="form-control mb-2">
    <label>email</label>
    <input type="text" id="email" name="email" value="{{$akun->email}}" class="form-control mb-2">
    <label>password</label>
    <input type="text" id="password" name="password" value="{{$akun->password}}" class="form-control mb-2">

    <button class="btn btn-primary">edit</button>
</form>

@endsection