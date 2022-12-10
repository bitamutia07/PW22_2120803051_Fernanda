<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Admin</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
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

    <tr>
      <td>1</td>
      <td>
        <a href="">Ubah</a> |
        <a href="">Hapus</a>
      </td>
      <td>
        <img src="img/gambar1.jpg" width="50">
      </td>
      <td>212080305</td>
      <td>Fernanda Sabitah Ramelia</td>
      <td>fernandasabita07@gmail.com</td>
      <td>Sistem Informasi</td>
    </tr>

  </table>
</body>

</html>