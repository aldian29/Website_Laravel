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
    Home
@endsection
@section('sidebar')
    @parent
@endsection
@section('judul')
    Contact Form
@endsection
@section('konten')
<style>
    body{
         background: linear-gradient(to top, #ffba8253, #b1b1b1);
    }
    .social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}
</style>
<img src="/folderpoto/rdosen1.png" id="bgutama">

<h1 id="textjudul">Teknologi Rekayasa <br>Perangkat Lunak</h1>
<p id="textsub">TRPL sendiri mempelajari tentang pengembangan suatu perangkat lunak <br> atau software komputer dengan menggunakan bahasa komputer.
<br>
@auth
    Welcome,{{auth()->user()->name}} 
@endauth
</p>
<hr id="garisjudul">
<div class="container" >
    
    <h2 class="section-title" id="subjudulku">Dosen Dosen TRPL</h2><br>
    <div class="row text-center">

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/panug.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Muhammad Nugraha, <br> M.Eng</h5><span class="small text-uppercase text-muted">Web Programming</span>
                
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/pamusa.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Musawarman,<br> S.Kom,M.M.S.I</h5><span class="small text-uppercase text-muted">Mobile Programming</span>
                
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/buheti.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Heti Mulyani, <br>S.T., M.Kom</h5><span class="small text-uppercase text-muted">Data Science</span>
                
            </div>
        </div><!-- End -->

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/pahalim.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Halimil Fathi, <br>M.Kom</h5><span class="small text-uppercase text-muted">Basis Data</span>
                
            </div>
        </div>
        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/paicak.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Ricak Agus Setiawan, <br>S.T.,M.SI</h5><span class="small text-uppercase text-muted">System Analyst</span>
                
            </div>
        </div>
        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/buade.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Ade Winarni, <br>S.T.,M.T</h5><span class="small text-uppercase text-muted">Citra Digital</span>
                
            </div>
        </div>
        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/buwid.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Widya Andayani Rahayu, <br>M.Pd</h5><span class="small text-uppercase text-muted">Bahasa Inggris</span>
                
            </div>
        </div>
        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="folderpoto/paazwar.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">N Syam Azwar, <br>S.Kom</h5><span class="small text-uppercase text-muted">Laboran</span>
                
            </div>
        </div>
        
        <hr>
        <!-- End -->
    </div>
</div> 
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Prolog</h2>
       </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="folderpoto/bg_login_edom.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Apa itu quesioner ?</h3>
          <p>
            Pernahkah Anda menyaksikan seseorang membagikan sebuah kuesioner dan memintanya untuk diisi? Ya, hampir setiap orang pasti pernah melihat atau bahkan melakukannya, baik sebagai keperluan penelitian maupun kepentingan bisnis. Namun, sebetulnya tahukah Anda apa itu kuesioner?

Singkatnya, pengertian kuesioner adalah sebuah teknik menghimpun data dari sejumlah orang atau responden melalui seperangkat pertanyaan untuk dijawab. Dengan memberikan daftar pertanyaan tersebut, jawaban-jawaban yang diperoleh kemudian dikumpulkan sebagai data. Nantinya, data diolah dan disimpulkan menjadi hasil penelitian.

Beberapa ahli memiliki definisi tersendiri mengenai apa itu kuesioner. Misalnya, Narbuko dan Achmadi (1999) mengatakan pengertian kuesioner adalah daftar rangkaian pertanyaan terkait suatu masalah atau bidang yang akan diteliti.

Di sisi lain, Sugiyono (2010) mengartikan kuesioner adalah metode pengumpulan data dengan cara memberi responden seperangkat pertanyaan maupun pernyataan tertulis untuk dijawabnya.

Pada dasarnya, tujuan dan manfaat kuesioner adalah untuk mendapatkan sejumlah data atau informasi yang relevan dengan topik penelitian. Umumnya, Metode ini lebih banyak digunakan pada penelitian kuantitatif guna menguraikan hubungan antara variabel.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

@endsection


