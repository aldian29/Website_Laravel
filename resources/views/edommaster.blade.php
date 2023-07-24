<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="edomcss.css" rel="stylesheet" />
    <link rel="stylesheet" href="majestic/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="majestic/template/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="majestic/template/css/style.css">
    <title>@yield('title')</title>
</head>
<body>  
      @section('sidebar')
      <nav class="navbar navbar-expand-lg navbar-light" id="nav1">
          <div class="container-fluid">
            <img src="folderpoto/trpl.png" id="logotrpl" href="/welcome">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav" style="padding-left: 70px;">
                <li class="nav-item">
                  <a class="nav-link active" id="navwhiteku" aria-current="page" href="/home">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="navwhiteku" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="navwhiteku" href="/matkul">Matakuliah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="navwhiteku" href="/ques">Quesioner</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="navwhiteku" href="/kontak">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="navwhiteku" href="/logout">Logout</a>
                </li>
              </ul>
            </div>
          </div>
          </nav><br><br><br><br>
          @show
            
                @section('konten')

                  @show
                  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
</body>
<footer class="footer" style="background-color: #FE9327;">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©AldianFD 2023</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Politeknik Enjinering Indorama <a href="https://www.instagram.com/trpl.pei/" target="_blank"> EDOM TRPL  </a> </span>
  </div>
  </footer>
</html>
