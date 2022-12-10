<html>

<head>
  <title>Tabel Ganjil Genap</title>
  <style>
    .genap {
      background-color: aquamarine;
    }

    .ganjil {
      background-color: coral;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="3" cellspacing="0">
    <tr>
      <th>Kolom 1</th>
      <th>Kolom 2</th>
      <th>Kolom 3</th>
      <th>Kolom 4</th>
      <th>Kolom 5</th>
    </tr>

    <?php
    for ($j = 1; $j <= 15; $j++) {
      echo "<tr>";

      for ($k = 1; $k <= 5; $k++) {
        echo "<td>Baris ke-$j Kolom ke-$k</td>";
      }

      echo "</tr>";
    }

    if ($j % 2 == 0) {
      "<div class='genap'>";
    } else {
      "<div class='ganjil'>";
    }

    ?>
  </table>

  </br>
  </br>
  </br>

</body>

</html>