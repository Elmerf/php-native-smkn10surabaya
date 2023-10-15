<?php
include 'layoutAdmin/header.php';
include 'crud.php';
?>
    <section class="jumbotron jumbotron-fluid bg-white mt-5 pt-5 mb-5 pb-5">
        <div class="container justify-content-center">
            <div class="card shadow rounded-lg"data-aos="zoom-in" data-aos-duration="1500">
                <div class="card-header font-weight-bold bg-info text-white text-center">
                    <h2 class="font1">Data Lengkap Pengguna</h2>
                </div>
                <div class="col-sm card-body table-secondary">
                    <a class="btn btn-outline-info bg-info text-white font-weight-bold rounded-pill" href="tambahdata.php">TAMBAH DATA</a>
                    <table class="table mt-3">
                        <tr class="text-info">
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Kata Sandi</th>
                            <th>Pengguna</th>
                            <th>Aksi</th>
                        </tr>
                        <!-- MENAMPILKAN DATA -->
                        <?php
                            $no = 1;
                            $tampil = mysqli_query($koneksi, "SELECT*FROM js ORDER BY id_namapengguna ASC");
                            while($data = mysqli_fetch_array($tampil)) :
                        ?>
                            <tr class="text-dark">
                                <td><?= $no++ ?></td>
                                <td><?= $data['namapengguna']?></td>
                                <td><?= $data['katasandi']?></td>
                                <td><?= $data['pengguna']?></td>
                                <td>
                                    <a class="btn btn-info" name="edit" href="ubahdata.php?hal=edit&id=<?=$data['id_namapengguna']?>">UBAH</a>
                                    <a class="btn btn-danger" name="hapus" href="datalengkap.php?hal=hapus&id=<?=$data['id_namapengguna']?>">HAPUS</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>