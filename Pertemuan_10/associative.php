<?php

//assosiative itu artinya pasangan
$mahasiswa = [
  "001" => "Ahmad",
  "002" => "Budi",
  "001" => "Chika",
  "002" => "Dhini",
  "001" => "Erwin"
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Array Associative</title>
</head>

<body>
  <?php
  foreach ($mahasiswa as $nrp => $nama) :
  ?>

    <li>
      <?php
      echo "$nrp : $nama"
      ?>
    </li>

  <?php endforeach ?>

</body>

</html>