@extends('master')
@section('title')
    Home
@endsection
@section('sidebar')
    @parent
@endsection
@section('top')
    @parent
@endsection
@section('judul')
    Data Prodi pakai eloquent
@endsection
@section('konten')
    <a href="/inputprodi" type="button" class="btn btn-danger">Tambah data</a>
    <table class="table table-secondary">
        <thead>
            <tr>
                <th>Kode prodi</th>
                <th>Nama Prodi</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($prd as $x)
            <tbody>
                <tr class="table-active">
                    <td>
                        {{ $x->kd_prodi }}
                    </td>
                    <td>
                        {{ $x->nama_prodi }}
                    </td>
                    <td>
                        <a href="/editprd/{{ $x->kd_prodi }}" class="btn btn-primary">Edit</a>
                        <a href="/hapusprd/{{ $x->kd_prodi }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
            <br>
        @endforeach
    </table>
@endsection
