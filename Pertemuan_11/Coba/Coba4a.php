<?php 

//cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
  !isset($_GET["nim"]) || 
  !isset($_GET["jurusan"]) || 
  !isset($_GET["email"]) || 
  !isset($_GET["gambar"]) ) {
  //isset (artinya: cek apakah $_Get udah ada)
  //redirect (memindahkan user dari suatu halaman ke halaman lain)
  header("Location: Coba4.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>detail Mahasiswa</title>
</head>

<body>
  <ul>
    <li><img src="../Pertemuan 10/img/<?= $_GET["gambar"]; ?>" alt=""></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nim"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
  </ul>

  <a href="Coba4.php">Kembali ke Daftar Mahasiswa</a>
</body>

</html>