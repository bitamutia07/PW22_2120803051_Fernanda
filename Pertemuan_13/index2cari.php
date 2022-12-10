<?php

//koneksi ke database
require 'function.php';
$mahasiswa = query("SELECT * FROM Mahasiswa");

//$mahasiswa = query("SELECT * FROM Mahasiswa ORDER BY id DESC")
//ASC = ngurutin data dari angka terkecil -> terbesar
//DESC = ngurutin data dari angka terbesar -> terkecil

if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Admin</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php"> Tambah Data Mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
  </form>

  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td>
          <?= $i; ?>
        </td>
        <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
        </td>
        <td>
          <img src="img/<?= $row["Gambar"]; ?>" width="50">
        </td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["NIM"]; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Jurusan"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>
</body>

</html>