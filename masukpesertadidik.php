<?php include 'layoutPesertaDidik/header.php';
session_start();
?>
    <section class="jumbotron jumbotron-fluid bg-info">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-md-5" data-aos="zoom-in-up" data-aos-duration="1500">
                    <img src="img/gambar3.png" class="img-fluid mt-5 " alt="...">
                </div>
                <div class="col-md-6 mt-5 pt-5" data-aos="zoom-in-up" data-aos-duration="1500">
                    <h1 class="font1 text-white display-3">Selamat Datang,</h1>
                    <h1 class="font1 warna1 font-italic display-3"><?=$_SESSION['namapengguna']?></h1>
                    <hr class="my-4 bg-white">
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>