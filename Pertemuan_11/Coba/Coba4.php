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
  <title>Daftar Nama</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li>
        <a href="Coba4a.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
          <?= $mhs["nama"]; ?></a>
      </li>
    <?php endforeach ?>
  </ul>


</body>

</html>