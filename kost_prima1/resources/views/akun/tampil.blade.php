@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>list akun</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('akun.tambah')}}">tambah akun</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>nomor hp</th>
        <th>email</th>
        <th>password</th>
        <th>aksi</th>
    </tr>
    @foreach ($akun as $no=>$data)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->nomor_hp}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>
        <td>
            <a href="{{ route('akun.edit', $data->id)}}" class="btn btn-sm btn-warning">edit</a>
            <form action="{{ route('akun.delete', $data->id)}}" method="post" style="display:inline;">
                @csrf
                <button class="btn btn-sm btn-danger">hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> 

@endsection
