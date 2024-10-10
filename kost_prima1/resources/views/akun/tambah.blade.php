@extends('layout')

@section('konten')

<h4>tambah akun</h4>

<form action="{{ route('akun.submit')}}" method="post">
    @csrf
    <label>nama</label>
    <input type="text" id="nama" name="nama" class="form-control mb-2">
    <label>nomor hp</label>
    <input type="number" id="nomor_hp" name="nomor_hp" class="form-control mb-2">
    <label>email</label>
    <input type="text" id="email" name="email" class="form-control mb-2">
    <label>password</label>
    <input type="text" id="password" name="password" class="form-control mb-2">

    <button class="btn btn-primary">tambah</button>
</form>

@endsection