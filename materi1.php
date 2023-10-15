<?php
include 'layoutPesertaDidik/header.php';
include 'crudmateri.php';
?>
<section class="jumbotron jumbotron-fluid bg-white mt-5 pt-5 mb-5 pb-5">
    <div class="container justify-content-center">
        <div class="card shadow rounded-lg" data-aos="zoom-in" data-aos-duration="1500">
            <div class="card-header font-weight-bold bg-info text-white text-center">
                <h2 class="font1">Struktur Data Statis</h2>
            </div>
            <div class="col-sm card-body table-secondary">
                <table class="table mt-3">
                    <tr class="text-info">
                        <th>No</th>
                        <th>Nama File</th>
                        <th>Aksi</th>
                    </tr>
                    <!-- MENAMPILKAN DATA -->
                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT*FROM filepdf WHERE jenismateri = 'statis' ORDER BY id_file ASC");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                        <tr class="text-dark">
                            <td><?= $no++ ?></td>
                            <td><?= $data['namafile'] ?></td>
                            <td>
                                <a class="btn btn-info" name="lihat" target="_blank" href="materigurulihat.php?hal=lihat&id=<?= $data['id_file'] ?>">LIHAT</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>