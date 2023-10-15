<?php
include 'layoutGuru/header.php';
include 'crudmateri.php';
?>
    <section class="jumbotron jumbotron-fluid bg-white mt-5 pt-5 mb-5 pb-5">
        <div class="container justify-content-center">
            <div class="card shadow rounded-lg"data-aos="zoom-in" data-aos-duration="1500">
                <div class="card-header font-weight-bold bg-info text-white text-center">
                    <h2 class="font1">Materi Kelas X RPL</h2>
                </div>
                <div class="col-sm card-body table-secondary">
                <a class="btn btn-outline-info bg-info text-white font-weight-bold rounded-pill" href="tambahmateri.php">TAMBAH MATERI</a>
                    <table class="table mt-3">
                        <tr class="text-info">
                            <th>No</th>
                            <th>Nama File</th>
                            <th>Materi</th>
                            <th>Aksi</th>
                        </tr>
                        <!-- MENAMPILKAN DATA -->
                        <?php
                            $no = 1;
                            $tampil = mysqli_query($koneksi, "SELECT*FROM filepdf ORDER BY id_file ASC");
                            while($data = mysqli_fetch_array($tampil)) :
                        ?>
                            <tr class="text-dark">
                                <td><?= $no++ ?></td>
                                <td><?= $data['namafile']?></td>
                                <td><?= $data['jenismateri']?></td>
                                <td>
                                    <a class="btn btn-info" name="lihat" target="_blank" href="materigurulihat.php?hal=lihat&id=<?=$data['id_file']?>">LIHAT</a>
                                    <a class="btn btn-secondary" name="edit" href="ubahmateri.php?hal=edit&id=<?=$data['id_file']?>">UBAH</a>
                                    <a class="btn btn-danger" name="hapus" href="materiguru.php?hal=hapus&id=<?=$data['id_file']?>">HAPUS</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>