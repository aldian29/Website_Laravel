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
Soal Quesioner
@endsection
@section('sidebar')
    @parent
@endsection
@section('judul')
    Soal Quesioner
@endsection
@section('konten')
<section>
        <div class=" col-12">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
                @endif
            @if(\Session::has('alert-success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div>{{Session::get('alert-success')}}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h5 for="mobile-id-icon">EDOM TRPL</h5>
                    <p>Fill in according to your respective assessments</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="/simpanedom" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama Dosen</label>
                                            <div class="position-relative">
                                                <select class="default-select form-control wide" name="dosen">
                                                    <option value="-" disabled selected>Pilih Dosen</option>
                                                    @foreach ($datapd as $z)
                                                        <option value="{{ $z->nidn }}">{{ $z->nama_dosen }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama Mata Kuliah</label>
                                            <div class="position-relative">
                                                <select class="default-select form-control wide" name="mk">
                                                    <option value="-" disabled selected>Pilih Mata Kuliah</option>
                                                    @foreach ($datapm as $mk)
                                                        <option value="{{ $mk->id_matkul }}">{{ $mk->nama_matkul }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-book"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Semester</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" name="smt"
                                                    placeholder="Semester" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-key"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                            @foreach ($data as $x)
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <table width="100%">
                                                                            <tr>
                                                                                <td width="75%"><h4 for="mobile-id-icon">{{ $x->pertanyaan }}</h4></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> <input type="radio" name="{{ $x->id_quesioner }}" value="1">(1) Sangat baik</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> <input type="radio" name="{{ $x->id_quesioner }}" value="2">(2) Baik</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> <input type="radio" name="{{ $x->id_quesioner }}" value="3">(3) Cukup</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> <input type="radio" name="{{ $x->id_quesioner }}" value="4">(4) Kurang</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            @endforeach
                            <div class="col-12 d-flex justify-content-end">
                                <button id="success" type="submit" class="btn btn-primary me-1 mb-1 success">Simpan</button>
                            </div>
                        </div>
                    </div>
                 </form>
            </div>
        </div>
    </section>
@endsection


