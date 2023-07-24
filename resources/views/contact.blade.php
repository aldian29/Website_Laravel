@extends('master')
@section('title')
    Profile
@endsection
@section('sidebar')
    @parent
@endsection
@section('top')
    @parent
@endsection
@section('judul')
    Contact Form
@endsection
@section('konten')
    <hr>
    <a href="/inputdsn" type="button" class="btn btn-primary">Tambah data</a><br><br>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>nidn</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($tampil2 as $x)
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
                        {{ $x->photo }}
                    </td>
                    <td>
                        <a href="/editdosen/{{ $x->nidn }}" class="btn btn-primary">Edit</a>
                        <a href="/hapusdsn/{{ $x->nidn }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
