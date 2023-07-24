@extends('master')
@section('title')
    Input
@endsection
@section('sidebar')
    @parent
@endsection
@section('top')
    @parent
@endsection
@section('judul')
    Input Data Mahasiswa
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
    @foreach ($tampil as $x)
        <div class="container">
            <form action="/update/{{$x->nim}}" method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="fnim">Nim</label>
                <input type="text" readonly name="nimku" value="{{ $x->nim }}">

                <label for="fname">Nama</label>
                <input type="text" name="namaku" value="{{ $x->nama }}">

                <label for="falmt">Alamat</label>
                <input type="text" name="alamatku" value="{{ $x->alamat }}">

                <label for="femail">Email</label>
                <input type="text" name="emailku" value="{{ $x->email }}">

                <label for="fpht">Photo</label>
                <input type="file" name="photo">
                <input type="hidden" name="pathlama" value="{{ $x->photo }}">
                <br><br>
                <input type="submit" name="Simpan" value="update">
            </form>
        </div>
    @endforeach
@endsection
