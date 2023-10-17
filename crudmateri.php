<?php
include 'koneksi.php';

//TOMBOL SIMPAN
if (isset($_POST['btn_simpanmateri'])) {
  if (isset($_POST['hal']) == "edit") {
    // HAPUS DATA TERLEBIH DAHULU
    $result = mysqli_query($koneksi, "SELECT namafile FROM filepdf WHERE id_file = '$_POST[id]'");
    $data = mysqli_fetch_array($result);

    if ($data) {
      $target_dir = "filepdf/";
      $namafile = $data['namafile'];
      $target_file = $target_dir . basename($namafile);

      if (file_exists($target_file)) {
        unlink($target_file);
      }

      $filename = $_FILES["namafile"]["name"];
      $target_file = $target_dir . basename($_FILES["namafile"]["name"]);

      if (file_exists($target_file)) {
        $filename = time() . '_' . $_FILES["namafile"]["name"];
        $target_file = $target_dir . basename($filename);
      }
      move_uploaded_file($_FILES["namafile"]["tmp_name"], $target_file);

      $edit = mysqli_query($koneksi, "UPDATE filepdf SET namafile = '$filename', jenismateri = '$_POST[jenismateri]' WHERE id_file = '$_POST[id]'");

      //UJI JIKA EDIT DATA SUKSES
      if ($edit) {
        echo "<script>alert('File berhasil diubah'); document.location='materiguru.php'</script>";
      } else {
        echo "<script>alert('File tidak berhasil diubah'); document.location='materiguru.php'</script>";
      }
      // $hapus = mysqli_query($koneksi, "UPDATE filepdf set namafile = '' WHERE id_file = '$_POST[id]'");
    }
  } else {
    $target_dir = "filepdf/";
    $target_file = $target_dir . basename($_FILES["namafile"]["name"]);
    //JIKA BUKAN EDIT DATA AKAN DISIMPAN BARU
    $filename = $_FILES["namafile"]["name"];

    if (file_exists($target_file)) {
      $filename = time() . '_' . $_FILES["namafile"]["name"];
      $target_file = $target_dir . $filename;
    }

    move_uploaded_file($_FILES["namafile"]["tmp_name"], $target_file);

    $tambah = mysqli_query($koneksi, "INSERT INTO filepdf (namafile, jenismateri) VALUE ('$filename','$_POST[jenismateri]')");

    //UJI JIKA SIMPAN DATA SUKSES
    if ($tambah) {
      echo "<script>alert('File berhasil ditambahkan'); document.location='materiguru.php'</script>";
    } else {
      echo "<script>alert('File tidak berhasil ditambahkan'); document.location='materiguru.php'</script>";
    }
  }
}

//DEKLARASI VARIABEL UNTUK MENAMPUNG DATA YANG AKAN DIEDIT
$varnamafile = "";
$varjenismateri = "";

//TOMBOL EDIT ATAU HAPUS DIKLIK
if (isset($_GET['hal'])) {
  if ($_GET['hal'] == "hapus") {
    //HAPUS DATA
    $result = mysqli_query($koneksi, "SELECT namafile FROM filepdf WHERE id_file = '$_GET[id]'");
    $data = mysqli_fetch_array($result);

    if ($data) {
      $target_dir = "filepdf/";
      $namafile = $data['namafile'];
      $target_file = $target_dir . basename($namafile);

      if (file_exists($target_file)) {
        unlink($target_file);
      }

      $hapus = mysqli_query($koneksi, "DELETE FROM filepdf WHERE id_file = '$_GET[id]'");
      //UJI JIKA HAPUS DATA SUKSES
      if ($hapus) {
        echo "<script>alert('File berhasil dihapus'); document.location='materiguru.php'</script>";
      } else {
        echo "<script>alert('File tidak berhasil dihapus'); document.location='materiguru.php'</script>";
      }
    }
  }
}
