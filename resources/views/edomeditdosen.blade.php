@extends('edommaster')

@section('title')
    Edit Data dosen
@endsection
@section('sidebar')
    @parent
@endsection
@section('judul')
    Edit Data dosen
@endsection
@section('konten')
<div class="container-fluid">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card" style="margin-top: 30px;background-color: whitesmoke;">
                <div class="card-body">
                  <h2 class="card-title">Edit Data </h2>
                  <p class="card-description">
                    Edit Data Dosen <code>TRPL</code>
                  </p><hr>

                  <form action="/updet/{{$dsn->nidn}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NIDN</label>
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="xnidn"value="{{$dsn->nidn}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="xnama"value="{{$dsn->nama_dosen}}">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="xalamat"value="{{$dsn->alamat_dosen}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="xjk"value="{{$dsn->jenis_kelamin}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bidang Keahlian</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="xbidang"value="{{$dsn->bidang_keahlian}}">
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" value="simpan data" class="btn btn-warning">Submit</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
        </div>
@endsection


