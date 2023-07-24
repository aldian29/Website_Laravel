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
    Data dosen pakai eloquent
@endsection
@section('konten')
    <a href="/inputdsnequ" type="button" class="btn btn-danger">Tambah data</a>
    <table class="table table-secondary">
        <thead>
            <tr>
                <th>Nidn</th>
                <th>Nama Dosen</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($dsn as $x)
            <tbody>
                <tr class="table-active">
                    <td>
                        {{ $x->nidn }}
                    </td>
                    <td>
                        {{ $x->namadsn }}
                    </td>
                    <td>
                        {{ $x->emaildsn }}
                    </td>
                    <td>
                        <img src="{{ $x->photo }}" width="300px" height="auto">
                    </td>
                    <td>
                        <a href="/editdosen/{{ $x->nidn }}" class="btn btn-primary">Edit</a>
                        <a href="/hapusdosen/{{ $x->nidn }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
            <br>
        @endforeach
    </table>
@endsection
