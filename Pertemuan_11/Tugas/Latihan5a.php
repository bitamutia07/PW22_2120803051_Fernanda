<?php

if (!isset($_GET["angka"]) || !isset($_GET["baris"])) {
  echo " ";
  exit;
}

$jA = $_GET["angka"];
$jB = $_GET["baris"];

for ($y = $jB; $y >= 1; $y--) {
  for ($x = 1; $x <= $y; $x++) {
    echo "$x ";
  }
  echo "</br>";
}
