<?php
include 'koneksi.php';

//TOMBOL SIMPAN
if (isset($_POST['btn_simpanmateri'])) {

  $target_dir = "filepdf/";
  $target_file = $target_dir . basename($_FILES["namafile"]["name"]);
  //DATA DIEDIT
  if (isset($_GET['hal']) == "edit") {
    $edit = mysqli_query($koneksi, "UPDATE filepdf SET namafile = '$_POST[namafile]', jenismateri = '$_POST[jenismateri]' WHERE id_file = '$_GET[id]'");

    //UJI JIKA EDIT DATA SUKSES
    if ($edit) {
      echo "<script>alert('File berhasil diubah'); document.location='materiguru.php'</script>";
    } else {
      echo "<script>alert('File tidak berhasil diubah'); document.location='materiguru.php'</script>";
    }
  } else {
    //JIKA BUKAN EDIT DATA AKAN DISIMPAN BARU
    $filename = $_FILES["namafile"]["name"];
    move_uploaded_file($_FILES["namafile"]["tmp_name"], $target_file);

    $tambah = mysqli_query($koneksi, "INSERT INTO filepdf (namafile, jenismateri) VALUE ('$filename','$_POST[jenismateri]')");
  }

  //UJI JIKA SIMPAN DATA SUKSES
  if ($tambah) {
    echo "<script>alert('File berhasil ditambahkan'); document.location='materiguru.php'</script>";
  } else {
    echo "<script>alert('File tidak berhasil ditambahkan'); document.location='materiguru.php'</script>";
  }
}

//DEKLARASI VARIABEL UNTUK MENAMPUNG DATA YANG AKAN DIEDIT
$varnamafile = "";
$varjenismateri = "";

//TOMBOL EDIT ATAU HAPUS DIKLIK
if (isset($_GET['hal'])) {
  //TOMBOL EDIT
  if ($_GET['hal'] == "edit") {
    //TAMPILKAN DATA
    $tampil = mysqli_query($koneksi, "SELECT * FROM filepdf WHERE id_file='$_GET[id]'");
    $data = mysqli_fetch_array($tampil);

    if ($data) {
      //JIKA DATA DITEMUKAN, MAKA DATA DITAMPUNG VARIABEL
      $varnamafile = $data['namafile'];
      $varjenismateri = $data['jenismateri'];
    }
  } else if ($_GET['hal'] == "hapus") {
    //HAPUS DATA
    $hapus = mysqli_query($koneksi, "DELETE FROM filepdf WHERE id_file = '$_GET[id]'");

    //UJI JIKA HAPUS DATA SUKSES
    if ($hapus) {
      echo "<script>alert('File berhasil dihapus'); document.location='materiguru.php'</script>";
    } else {
      echo "<script>alert('File tidak berhasil dihapus'); document.location='materiguru.php'</script>";
    }
  }
}
