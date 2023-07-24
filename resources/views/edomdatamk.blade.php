@extends('edommaster')
<link href="yoksi/assets/img/favicon.png" rel="icon">
  <link href="yoksi/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="yoksi/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="yoksi/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="yoksi/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="yoksi/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="yoksi/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="yoksi/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="yoksi/assets/css/style.css" rel="stylesheet">
@section('title')
    Data matkul
@endsection
@section('sidebar')
    @parent
@endsection
@section('judul')
    Data matkul
@endsection
@section('konten')
<div class="container-fluid">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                  <h2 class="card-title">Matakuliah TRPL</h2>
                  <p class="card-description">
                    Data Matakuliah <code>TRPL</code>
                  </p>
                  @if(Auth::user()->role=='Admin')
                  <a href="/tambahmk"><button type="submit" value="simpan data" class="btn btn-warning">Tambah Matkul</button></a>
                  @endif
                  <hr>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>Kode Matakuliah</th>
                          <th>Nama Matakuliah</th>
                          <th>SKS Matakuliah</th>
                          <th>semester Matakuliah</th>
                          @if(Auth::user()->role=='Admin')
                          <th>Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($viewMk as $m)
                        <tr>
                          <td>{{$m->id_matkul}}</td>
                          <td>{{$m->nama_matkul}}</td>
                          <td>{{$m->sks_matkul}}</td>
                          <td>{{$m->semester_matkul}}</td>
                          @if(Auth::user()->role=='Admin')
                          <td>
                            <a href="/ubahmk/{{$m->id_matkul}}"><i class="mdi mdi-settings"></i></a> |
                            <a href="/hpsmk/{{$m->id_matkul}}"><i class="mdi mdi-delete"></i></a>
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection


