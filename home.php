<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css"/>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- EFFECT CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  </head>
  <body>
    <section class="navbar_beranda fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light shadow bg-light">
            <div class="container">
                <a class="font1 text-info navbar-brand" href="home.php">JavaSmart</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse warna1" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#informasi">Informasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="jumbotron jumbotron-fluid bg-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5" data-aos="zoom-in-up" data-aos-duration="1500">
                    <img src="img/gambar1.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-6 mt-5 pt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                    <h1 class="font1 text-white display-3">Selamat Datang</h1>
                    <p class="lead warna1 font-italic display-4">di JavaSmart</p>
                    <hr class="my-4 bg-white">
                    <a class="btn btn-outline-info bg-white text-info font-weight-bold nav-link rounded-pill col-md-4" href="login.php">MULAI BELAJAR</a>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang">
        <div class="jumbotron bg-white">
            <div class="container mt-5 pt-5 mb-5 pb-5">
                <div class="row text-center pt-3 pb-5">
                    <div class="col text-info text-center">
                        <h2 class="font1" data-aos="zoom-in" data-aos-duration="1500">Apa Itu JavaSmart ?</h2>
                    </div>
                </div>
                <div class="col card-body text-center warna1 bg-info shadow rounded-lg mt-5" data-aos="fade-down" data-aos-duration="1500">
                    <p>JavaSmart merupakan aplikasi uji kompetensi berbasis website yang dapat digunakan oleh peserta didik 
                        dan guru secara online. Dalam website ini terdapat fitur utama yaitu praktik pemrograman yang didalamnya 
                        dilengkapi dengan nilai diperoleh oleh peserta didik. Selain itu, terdapat juga fitur materi pelajaran 
                        yang diajarkan dan fitur kuis atau latihan soal yang dapat dikerjakan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="informasi" class="jumbotron jumbotron-fluid bg-info">
        <div class="container pt-4 mt-4">
            <div class="row justify-content-center text-center pt-3 pb-5">
                <div class="col text-white text-center">
                    <h2 class="font1" data-aos="zoom-in" data-aos-duration="1500">Informasi</h2>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
                <div class="col-lg-3">
                    <div class="card bg-info border-0 mb-3">
                        <img src="img/logo.png" class="img-fluid w-75" alt="...">
                        <hr class="bg-white">
                        <div class="card-body">
                            <h2 class="font1 text-white">JavaSmart</h2>
                            <p class="font1 warna1">Aplikasi uji kompetensi berbasis website</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 rounded-lg">
                    <div class="card bg-info border-0 mt-3 mb-3">
                        <div class="card-body">
                            <h5 class="font1 text-info bg-white text-center rounded-pill">Fitur Website</h5>
                            <p class="font1 warna1 pt-3">Materi Pelajaran</p>
                            <p class="font1 warna1">Latihan Soal</p>
                            <p class="font1 warna1">Praktik Pemrograman</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 rounded-lg">
                    <div class="card bg-info border-0 mt-3 mb-3">
                        <div class="card-body">
                            <h5 class="font1 text-info bg-white text-center rounded-pill">Bantuan</h5>
                            <p class="bi bi-person-fill font1 warna1 pt-3"> Zada Ceindea Vica Soedjono</p>
                            <p class="bi bi-telephone-fill font1 warna1"> 081939446961</p>
                            <p class="bi bi-envelope-at-fill font1 warna1"> zadasoedjono23@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 rounded-lg">
                    <div class="card bg-info border-0 mt-3 mb-3">
                        <div class="card-body">
                            <h5 class="font1 text-info bg-white text-center rounded-pill">Media Sosial</h5>
                            <a href="https://www.instagram.com/zadaceindea26/">
                                <p class="bi bi-instagram font1 warna1 pt-3"> zadaceindea26</p>
                            </a>
                            <a href="https://line.me/ti/p/Y7oAz2oDTp">
                                <p class="bi bi-line font1 warna1"> @zada_cvs26</p>
                            </a>
                            <a href="https://wa.me/6281939446961">
                                <p class="bi bi-whatsapp font1 warna1"> 081939446961</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>