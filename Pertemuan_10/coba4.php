<?php

$mahasiswa = [
  ["Joni", "123456", "Sistem Informasi", "joni@gmail.com"],
  ["Budi", "123457","Sistem Informasi", "budi@gmail.com"],
  ["Joni", "123456", "Sistem Informasi", "joni@gmail.com"],
  ["Budi", "123457","Sistem Informasi", "budi@gmail.com"],
  ["Budi", "123457","Sistem Informasi", "budi@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Array Associative</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) { ?>
      <li> <?php echo $mhs; ?> </li>
    <?php } ?>

    <!--     
      <?php foreach ($mahasiswa as $mhs) : ?>
      <li> <?php echo $mhs; ?> </li>
      <?php endforeach; ?> 
    -->
  </ul>
</body>

</html>