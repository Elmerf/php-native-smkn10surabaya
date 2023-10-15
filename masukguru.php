<?php include 'layoutGuru/header.php';
session_start();
?>
    <section class="jumbotron jumbotron-fluid bg-info mb-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5" data-aos="zoom-in-up" data-aos-duration="1500">
                    <img src="img/gambar2.png" class="img-fluid mt-5 w-75" alt="...">
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