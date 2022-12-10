<?php

$a = 3;
$b = 5;

function Volume_dua_Kubus($a, $b)
{

  $volume_a = $a * $a * $a;
  $volume_b = $b * $b * $b;

  $total = $volume_a + $volume_b;

  return $total;
}

echo Volume_dua_Kubus($a, $b);
