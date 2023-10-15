<?php

session_start();
unset($_SESSION['namapengguna']);
unset($_SESSION['katasandi']);
unset($_SESSION['pengguna']);

session_destroy();
echo "<script>alert('Terimakasih');
document.location='home.php'</script>";