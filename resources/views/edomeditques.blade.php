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
              <div class="card" style="margin-top: 30px;background-color: whitesmoke;">
                <div class="card-body">
                  <h2 class="card-title">Insert Data</h2>
                  <p class="card-description">
                    Edit Data Matakuliah <code>TRPL</code>
                  </p><hr>

                  <form action="/updetq/{{$q->id_quesioner}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kode Quesioner</label>
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="xidq"value="{{$q->id_quesioner}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pertanyaan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="xpert"value="{{$q->pertanyaan}}">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Pertanyaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="xjenis"value="{{$q->jenis_pertanyaan}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Pertanyaan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="xsts"value="{{$q->status_pertanyaan}}">
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

