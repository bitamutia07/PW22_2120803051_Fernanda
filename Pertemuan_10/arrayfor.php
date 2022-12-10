<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Eko"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Looping for Array</title>
</head>

<body>
  <?php
  for ($i = 0; $i < count($nama); $i++) {
    //count untuk menentukan jumlah index array
    echo "<li>$nama[$i]</li>";
  }

  ?>
</body>

</html>