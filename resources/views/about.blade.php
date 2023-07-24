@extends('master')
@section('title')
    About
@endsection
@section('sidebar')
    @parent
@endsection
@section('top')
    @parent
@endsection
@section('judul')
    Data Mahasiswa terbaru 2023
@endsection
@section('konten')
    <hr>
    <h3>Welcome!,{{auth()->user()->name}}</h3>
    <a href="/inputku" type="button" class="btn btn-primary">Tambah data</a><br><br>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Kd Prodi</th>
                <th>Dosen pengampu</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($tampil as $x)
            <tbody>
                <tr class="table-active">
                    <td>
                        {{ $x->nim }}
                    </td>
                    <td>
                        {{ $x->nama }}
                    </td>
                    <td>
                        {{ $x->alamat }}
                    </td>
                    <td>
                        {{ $x->email }}
                    </td>
                    <td>
                        <img src="{{ $x->photo }}" width="300px" height="auto">
                    </td>
                    <td>
                        @foreach ($mhsdsnprd as $z)
                            @if ($x->nim == $z->nim)
                                {{$z->nama_prodi}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($mhsdsnprd as $z)
                            @if ($x->nim == $z->nim)
                                {{$z->namadsn}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="/editmhs/{{ $x->nim }}" class="btn btn-primary">Edit</a>
                        <a href="/hapus/{{ $x->nim }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
