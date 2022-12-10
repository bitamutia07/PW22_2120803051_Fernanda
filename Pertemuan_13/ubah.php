<?php
//menghubungkan dengan function
require 'function.php';

//ambil data diurl
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM Mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  //cara cek data masuk gak met2
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('Data Berhasil Diubah');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal Diubah');
        document.location.href = 'index.php';
      </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubah data Mahasiswa</title>
</head>

<body>

  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["Gambar"]; ?>">
    <ul>
      <li>
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"]; ?>">
      </li>

      <li>
        <label for="NIM">NIM : </label>
        <input type="text" name="NIM" id="NIM" required value="<?= $mhs["NIM"]; ?>">
      </li>

      <li>
        <label for="Email">Email : </label>
        <input type="text" name="Email" id="Email" required value="<?= $mhs["Email"]; ?>">
      </li>

      <li>
        <label for="Jurusan">Jurusan : </label>
        <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs["Jurusan"]; ?>">
      </li>

      <li>
        <label for="Gambar">Gambar : </label>
        <img src="img/<?= $mhs['Gambar']; ?>" width="50px"> <br>
        <input type="file" name="Gambar" id="Gambar" required>
      </li>

      <li>
        <button type="submit" name="submit">
          Ubah Data
        </button>
      </li>

    </ul>
  </form>

</body>

</html>