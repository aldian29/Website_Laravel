@extends('master')
@section('title')
    Input dosen
@endsection
@section('sidebar')
    @parent
@endsection
@section('top')
    @parent
@endsection
@section('judul')
    Input Data Dosen
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

        <form action="/simpanequ" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="fnim">Nidn</label>
            <input type="text" name="nidnequ" placeholder="Your Nidn..">

            <label for="fname">Nama Dosen</label>
            <input type="text" name="namadequ" placeholder="Your Name..">

            <label for="femail">Email</label>
            <input type="text" name="emaildequ" placeholder="Your Email..">

            <label for="fpht">Photo</label>
            <input type="file" name="photodequ" placeholder="Your Photo..">
            <br><br>
            <input type="submit" name="simpan" value="simpan">
        </form>
    </div>
@endsection
