<?php include 'layoutGuru/header.php'; ?>
<?php include 'koneksi.php'; ?>
<?php
$result = mysqli_query($koneksi, "SELECT `namafile` FROM filepdf WHERE id_file = '$_GET[id]'");
?>
<section class="jumbotron jumbotron-fluid bg-white">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body justify-content-center d-flex">
                <?php
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $filename = $row["namafile"];
                    echo "<iframe src='filepdf/$filename' width='1000' height='1000'></iframe>";
                } else {
                    echo "<p>File not found.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>