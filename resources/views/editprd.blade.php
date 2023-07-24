@extends('master')
@section('title')
    Edit prodi
@endsection
@section('sidebar')
    @parent
@endsection
@section('top')
    @parent
@endsection
@section('judul')
    Edit data prodi
@endsection
@section('konten')
    <style>
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="/updateprd/{{ $eprd->kd_prodi }}">
            {{ csrf_field() }}
            <label for="fnim">Kode Prodi</label>
            <input type="text" readonly name="kd_prodi" value="{{ $eprd->kd_prodi }}">

            <label for="fname">Nama Prodi</label>
            <input type="text" name="nama_prodi" value="{{ $eprd->nama_prodi }}">
            <br><br>
            <input type="submit" name="Simpan" value="update">
        </form>
    </div>
@endsection
