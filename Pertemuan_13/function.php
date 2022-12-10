<?php

// //ambil data dari tabel mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// //ambil data(fetch) mahasiswa dari objek result
// //mysqli_fetch_row()
// //mysqli_fetch_assoc()
// //mysqli_fetch_array()
// //mysqli_fetch_object()

// // while ($mhs = mysqli_fetch_row($result)) {
// //   var_dump($mhs);
// // }

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $nama = htmlspecialchars($data["Nama"]);
  $nim = htmlspecialchars($data["NIM"]);
  $email = htmlspecialchars($data["Email"]);
  $jurusan = htmlspecialchars($data["Jurusan"]);
  // $gambar = htmlspecialchars($data["Gambar"]);

  //upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO Mahasiswa
              VALUES
              ('','$nama', '$nim', '$email', '$jurusan', '$gambar')
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namafile = $_FILES['Gambar']['Nama'];
  $ukuranFile = $_FILES['Gambar']['size'];
  $error = $_FILES['Gambar']['error'];
  $tmpName = $_FILES['Gambar']['tmp_name'];

  //cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
          </script>";
    return false;
  }

  //cek yang diupload gambar atau bukan
  $ekstensigambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensigambar = explode('.', $namafile);
  $ekstensigambar = strtolower(end($ekstensigambar));

  if (!in_array($ekstensigambar, $ekstensigambarValid)) {
    echo "<script>
            alert('yang anda upload bukan Gambar!');
            </script>";
  }

  //cek jika ukuran gambar terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('Ukuran Gambar terlalu besar!');
            </script>";
  }

  $namafileBaru = uniqid();
  $namafileBaru .= '.';
  $namafileBaru .= $ekstensigambar;

  //lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpName, 'img/' . $namafileBaru);
  return $namafile;

  //explode fungsi untuk memecah sebuah string jadi array 
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM Mahasiswa WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  $id = $data["id"];
  $nama = htmlspecialchars($data["Nama"]);
  $nim = htmlspecialchars($data["NIM"]);
  $email = htmlspecialchars($data["Email"]);
  $jurusan = htmlspecialchars($data["Jurusan"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  if ($_FILES['Gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  $query = "UPDATE Mahasiswa SET
              Nama ='$nama', 
              NIM = '$nim', 
              Email = '$email', 
              Jurusan = '$jurusan', 
              Gambar = '$gambar'
            WHERE id = $id
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM Mahasiswa
            WHERE 
            Nama LIKE '%$keyword%' OR
            NIM LIKE '%$keyword%' OR
            Email LIKE '%$keyword%' OR
            Jurusan LIKE '%$keyword%' 
          ";
  //LIKE gak harus benar-benar sama, tapi bakal tampil
  //% tampilin keyword, tak peduli apupun sebelum atau setelah keyword
  return query($query);
}
