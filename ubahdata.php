<?php
include 'layoutAdmin/header.php';
include 'crud.php';
?>
    <section class="jumbotron jumbotron-fluid bg-white mt-5 pt-5 mb-5 pb-5">
        <div class="container col-md-4 justify-content-center">
            <div class="card shadow rounded-lg" data-aos="zoom-in-left" data-aos-duration="1000">
                <div class="card-header font-weight-bold bg-info text-white text-center">
                    <h2 class="font1">Ubah Data Pengguna</h2>
                </div>
                <div class="card-body table-active">
                    <form class="form-singin font-weight-bold text-info" method="POST">
                        <div class="form-group">
                            <label>Nama Pengguna</label>
                            <input type="text" class="form-control" placeholder="Masukan nama pengguna" name="namapengguna" value="<?= $varnamapengguna ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input type="password" class="form-control" placeholder="Masukan kata sandi" name="katasandi" value="<?= $varkatasandi ?>" required>
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
                        <button type="submit" name="btn_simpan" class="btn btn-outline-info bg-info text-white font-weight-bold rounded-pill">UBAH</button>
                        <a class="btn btn-outline-secondary bg-secondary text-white font-weight-bold rounded-pill" href="datalengkap.php">KEMBALI</a>
                    </form>
                </div>    
            </div>
        </div>
    </section>
<?php include 'footer.php';?>