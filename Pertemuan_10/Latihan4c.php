<?php

$asean = [
  "Indonesia" => "Jakarta",
  "Malaysia" => "Kuala Lumpur",
  "Singapura" => "Singapura",
  "Filipina" => "Manila",
  "Thailand" => "Bangkok"
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h1>Daftar Negara dan Ibukota</h1>
  <?php
  foreach ($asean as $negara => $ibukota) :
  ?>

    <li>
      <?php
      echo "$negara : $ibukota"
      ?>
    </li>

  <?php endforeach ?>

</body>

</html>