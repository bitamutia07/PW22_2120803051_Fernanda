<?php

$mahasiswa = [
  [
    "nama" => "Joni",
    "nim" => "123456",
    "jurusan" => "Sistem informasi",
    "email" => "joni@gmail.com"
  ],
  [
    "nama" => "Budi",
    "nim" => "123457",
    "jurusan" => "Ilmu Komputer",
    "email" => "budi@gmail.com"
  ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Jurursan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>