<?php
include "koneksi.php";

//TOMBOL SIMPAN
if(isset($_POST['btn_simpan']))
{
  //DATA DIEDIT
  if(isset($_GET['hal']) == "edit")
  {
    $edit = mysqli_query($koneksi, "UPDATE js SET namapengguna = '$_POST[namapengguna]', katasandi = '$_POST[katasandi]', pengguna = '$_POST[pengguna]' WHERE id_namapengguna = '$_GET[id]'");

    //UJI JIKA EDIT DATA SUKSES
    if ($edit)
    {
      echo "<script>alert('Data berhasil diubah'); document.location='datalengkap.php'</script>";
    }
    else
    {
      echo "<script>alert('Data tidak berhasil diubah'); document.location='datalengkap.php'</script>";
    }
  }
  else
  {
    //JIKA BUKAN EDIT DATA AKAN DISIMPAN BARU
    $tambah = mysqli_query($koneksi, "INSERT INTO js (namapengguna, katasandi, pengguna) VALUE ('$_POST[namapengguna]', '$_POST[katasandi]', '$_POST[pengguna]')");
  }

  //UJI JIKA SIMPAN DATA SUKSES
  if ($tambah)
  {
    echo "<script>alert('Data berhasil ditambahkan'); document.location='datalengkap.php'</script>";
  }
  else
  {
    echo "<script>alert('Data tidak berhasil ditambahkan'); document.location='datalengkap.php'</script>";
  }
}

//DEKLARASI VARIABEL UNTUK MENAMPUNG DATA YANG AKAN DIEDIT
$varnamapengguna = "";
$varkatasandi = "";
$varpengguna = "";

//TOMBOL EDIT ATAU HAPUS DIKLIK
if(isset($_GET['hal']))
{
  //TOMBOL EDIT
  if($_GET['hal'] == "edit")
  {
    //TAMPILKAN DATA
    $tampil = mysqli_query($koneksi, "SELECT * FROM js WHERE id_namapengguna='$_GET[id]'");
    $data = mysqli_fetch_array($tampil);

    if($data)
    {
      //JIKA DATA DITEMUKAN, MAKA DATA DITAMPUNG VARIABEL
      $varnamapengguna = $data['namapengguna'];
      $varkatasandi = $data['katasandi'];
      $varpengguna = $data['pengguna'];
    }
  }
  else if ($_GET['hal'] == "hapus")
  {
    //HAPUS DATA
    $hapus = mysqli_query($koneksi, "DELETE FROM js WHERE id_namapengguna = '$_GET[id]'");

    //UJI JIKA HAPUS DATA SUKSES
    if ($hapus)
    {
      echo "<script>alert('Data berhasil dihapus'); document.location='datalengkap.php'</script>";
    }
    else
    {
      echo "<script>alert('Data tidak berhasil dihapus'); document.location='datalengkap.php'</script>";
    }
  }
}