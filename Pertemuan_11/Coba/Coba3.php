<?php

$mahasiswa = [
  [
    "nama" => "Joni",
    "nim" => "123456",
    "jurusan" => "Sistem informasi",
    "email" => "joni@gmail.com",
    "gambar" => "gambar1.jpg"
  ],
  [
    "nama" => "Budi",
    "nim" => "123457",
    "jurusan" => "Ilmu Komputer",
    "email" => "budi@gmail.com",
    "gambar" => "gambar2.jpg"
  ],
  [
    "nama" => "Rani",
    "nim" => "123458",
    "jurusan" => "Tarbiyah",
    "email" => "rani@gmail.com",
    "gambar" => "gambar3.jpg"
  ]
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>GET</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><img src="../Pertemuan 10/img/<?= $mhs["gambar"]; ?>"></li>
      <li><?= $mhs["nama"]; ?></li>
      <li><?= $mhs["nim"]; ?></li>
    </ul>
  <?php endforeach ?>

</body>

</html>