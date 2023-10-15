<?php
include 'layoutGuru/header.php';
include 'crudmateri.php';
?>
<section class="jumbotron jumbotron-fluid bg-white mt-5 pt-5 mb-5 pb-5">
    <div class="container col-md-4 justify-content-center">
        <div class="card shadow rounded-lg" data-aos="zoom-in-left" data-aos-duration="1000">
            <div class="card-header font-weight-bold bg-info text-white text-center">
                <h2 class="font1">Tambah Materi</h2>
            </div>
            <div class="card-body table-active">
                <form class="form-singin font-weight-bold text-info" method="POST" action="crudmateri.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama File</label>
                        <input type="file" class="form-control" name="namafile" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Materi</label>
                        <select class="form-control" name="jenismateri">
                            <option selected disabled>Pilih</option>
                            <option value="statis">Statis</option>
                            <option value="dinamis">Dinamis</option>
                            <option value="tipedata">Tipe Data</option>
                            <option value="perulangan">Perulangan</option>
                        </select>
                    </div>
                    <button type="submit" name="btn_simpanmateri" value="UPLOAD" class="btn btn-outline-info bg-info text-white font-weight-bold rounded-pill">SIMPAN</button>
                    <a class="btn btn-outline-secondary bg-secondary text-white font-weight-bold rounded-pill" href="materiguru.php">KEMBALI</a>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>