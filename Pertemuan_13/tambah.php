<?php
//menghubungkan dengan function
require 'function.php';

//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (isset($_POST["submit"])) {
  //ambil data dari tiap elemen dalam form
  // $nim = $_POST["NIM"];
  // $nama = $_POST["Nama"];
  // $email = $_POST["Email"];
  // $jurusan = $_POST["Jurusan"];
  // $gambar = $_POST["Gambar"];
  //tapi bisa ditarok di function ae biar lebih efektif

  // $query = "INSERT INTO Mahasiswa
  //             VALUES
  //             ('','$nim', '$nama', '$email', '$jurusan', '$gambar')
  //           ";
  // mysqli_query($conn, $query);
  //ini pidahin ke function jg

  //cek apakah data berhasil ditambahkan
  //kalo yang diatas udah ditarok di file function, ini gak usah di pakek lagi
  // if (mysqli_affected_rows($conn) > 0) {
  //   echo "Berhasil";
  // } else {
  //   echo "gagal";
  //   echo "<br>";
  //   echo mysqli_affected_rows($conn);
  // }

  //cara cek data masuk gak met2
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "Data Gagal Ditambahkan";
    echo "<br>";
    echo mysqli_affected_rows($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tambah data Mahasiswa</title>
</head>

<body>

  <h1>Tambah Data Mahasiswa</h1>

  <form action="" method="POST">
    <ul>
      <li>
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" id="Nama" required>
      </li>

      <li>
        <label for="NIM">NIM : </label>
        <input type="text" name="NIM" id="NIM" required>
      </li>

      <li>
        <label for="Email">Email : </label>
        <input type="text" name="Email" id="Email" required>
      </li>

      <li>
        <label for="Jurusan">Jurusan : </label>
        <input type="text" name="Jurusan" id="Jurusan" required>
      </li>

      <li>
        <label for="Gambar">Gambar : </label>
        <input type="text" name="Gambar" id="Gambar">
      </li>

      <li>
        <button type="submit" name="submit">
          Tambah Data
        </button>
      </li>

    </ul>
  </form>

</body>

</html>