<html>

<head>
  <title>POST</title>
</head>

<body>

  <form action="" method="post">
    Masukkan Angka :
    <input type="number" name="angka">

    <button type="submit" name="submit">Tampilkan</button>
  </form>

  <br>

  <?php
  if (isset($_POST["submit"])) {
    for ($y = $_POST["angka"]; $y >= 1; $y--) {
      for ($x = 1; $x <= $y; $x++) {
        echo "$x ";
      }
      echo "</br>";
    }
  }
  ?>

</body>

</html>