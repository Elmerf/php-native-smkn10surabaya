<?php
include 'layoutPesertaDidik/header.php';
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT id_file FROM filepdf WHERE jenismateri = 'statis' LIMIT 1");
$dataStatis = mysqli_fetch_array($result);
if ($dataStatis) $idStatis = $dataStatis["id_file"];

$result = mysqli_query($koneksi, "SELECT id_file FROM filepdf WHERE jenismateri = 'dinamis' LIMIT 1");
$dataDinamis = mysqli_fetch_array($result);
if ($dataDinamis) $idDinamis = $dataDinamis["id_file"];

$result = mysqli_query($koneksi, "SELECT id_file FROM filepdf WHERE jenismateri = 'tipedata' LIMIT 1");
$dataTipeData = mysqli_fetch_array($result);
if ($dataTipeData) $idTipeData = $dataTipeData["id_file"];

$result = mysqli_query($koneksi, "SELECT id_file FROM filepdf WHERE jenismateri = 'perulangan' LIMIT 1");
$dataPerulangan = mysqli_fetch_array($result);
if ($dataPerulangan) $idPerulangan = $dataPerulangan["id_file"];
?>
<section class="jumbotron jumbotron-fluid bg-info">
    <div class="container mt-5 justify-content-center">
        <div class="row justify-content-center text-center pt-3 pb-3">
            <div class="col text-white text-center">
                <h2 class="font1" data-aos="zoom-in" data-aos-duration="1500">Materi Pembelajaran Kelas X RPL</h2>
            </div>
        </div>
        <div class="row text-center mb-2">
            <div class="col-sm-3 mb-3 d-flex">
                <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card-body">
                        <a href="materigurulihat.php?hal=lihat&id=<?= isset($idStatis) ? $idStatis : -1 ?>">
                            <img src="img/materi1.png" class="img-fluid" alt="...">
                        </a>
                        <hr class="my-4 bg-info">
                        <h5 class="card-text text-info font-weight-bold ">Struktur Data Statis</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 d-flex">
                <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card-body">
                        <a href="materigurulihat.php?hal=lihat&id=<?= isset($idDinamis) ? $idDinamis : -1 ?>">
                            <img src=" img/materi2.png" class="img-fluid" alt="...">
                        </a>
                        <hr class="my-4 bg-info">
                        <h5 class="card-text text-info font-weight-bold">Struktur Data Dinamis</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 d-flex">
                <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card-body">
                        <a href="materigurulihat.php?hal=lihat&id=<?= isset($idTipeData) ? $idTipeData : -1 ?>">
                            <img src="img/materi3.png" class="img-fluid" alt="...">
                        </a>
                        <hr class="my-4 bg-info">
                        <h5 class="card-text text-info font-weight-bold">Tipe Data</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 d-flex">
                <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card-body">
                        <a href="materigurulihat.php?hal=lihat&id=<?= isset($idPerulangan) ? $idPerulangan : -1 ?>">
                            <img src="img/materi4.png" class="img-fluid" alt="...">
                        </a>
                        <hr class="my-4 bg-info">
                        <h5 class="card-text text-info font-weight-bold">Struktur Perulangan</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>