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
    Profile Saya
@endsection
@section('konten')
    <style>
        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
            margin-left: 400px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 133%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #0083FF;
            color: white;
            transform: rotateY(180deg);
        }
    </style>
    <br>
    <hr>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="img/aldy.jpg" style="width:300px;">
            </div>
            <div class="flip-card-back">
                <h1>Aldian Filzah Daryanto</h1>
                <br>
                <p>Editor & Software</p>
                <p>TTL:Purwakarta,29 juli 2001</p>
                <p>"Kalau orang lain bisa key_existshkgb"</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <hr>

   
@endsection
