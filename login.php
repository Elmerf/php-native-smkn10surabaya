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
  </head>
  <body class="bg-info">
    <section class="">
      <div class="container mt-5 pt-5 mb-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-md-5 card-body text-info bg-white shadow rounded-lg" data-aos="fade-down-left" data-aos-duration="1000">
            <form class="form-singin font-weight-bold" method="POST" action="ceklogin.php">
              <div class="form-group">
                <label>Nama Pengguna</label>
                <input type="text" class="form-control" placeholder="Masukan nama pengguna" name="namapengguna" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" class="form-control" placeholder="Masukan kata sandi" name="katasandi" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Pilih Pengguna</label>
                <select class="form-control" name="pengguna">
                  <option selected disabled>Pilih</option>
                  <option value="guru">Guru</option>
                  <option value="pesertadidik">Peserta Didik</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
              <button type="submit" class="btn btn-outline-info bg-info text-white font-weight-bold rounded-pill" name="masuk">MASUK</button>
              <a class="btn btn-outline-secondary bg-secondary text-white font-weight-bold rounded-pill" href="home.php">KEMBALI</a>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php include 'footer.php';?>