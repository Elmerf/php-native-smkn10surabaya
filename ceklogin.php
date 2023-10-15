<?php

//PANGGIL KONEKSI DATABASE
include "koneksi.php";

$sandi=($_POST['katasandi']);
$namapengguna=mysqli_escape_string($koneksi, $_POST['namapengguna']);
$katasandi=mysqli_escape_string($koneksi, $sandi);
$pengguna=mysqli_escape_string($koneksi, $_POST['pengguna']);

//CEK NAMA PENGGUNA
$cekpengguna=mysqli_query($koneksi, "SELECT*FROM js WHERE namapengguna='$namapengguna' AND pengguna='$pengguna'");
$pengguna_valid=mysqli_fetch_array($cekpengguna);

//UJI JIKA PENGGUNA TERDAFTAR
if($pengguna_valid)
{
    //CEK PASSWORD
    if($katasandi==$pengguna_valid['katasandi'])
    {
        //BUAT SESSION
        session_start();
        $_SESSION['namapengguna']=$pengguna_valid['namapengguna'];
        $_SESSION['pengguna']=$pengguna_valid['pengguna'];

        //UJI PENGGUNA (GURU / PESERTA DIDIK)
        if($pengguna=="guru")
        {
            header('Location:masukguru.php');
        }
        elseif($pengguna=="pesertadidik")
        {
            header('Location:masukpesertadidik.php');
        }
        elseif($pengguna=="admin")
        {
            header('Location:masukadmin.php');
        }
    }
    else
    {
        echo"<script>alert('Kata sandi tidak sesuai');
        document.location='login.php'</script>";
    }
}
else
{
    echo"<script>alert('Data tidak ditemukan');
    document.location='login.php'</script>";
}