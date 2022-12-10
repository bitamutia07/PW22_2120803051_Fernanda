<?php

$x = 10; //variabel lokal untuk Coba1.php

function tampilX()
{
  //lingkup $x yang ada didalam function 
  //berbeda dengan lingkup $x diluar function

  //cara agar $x diluar bisa diambil untuk didalam function
  //menambahkan global (jadi variabel global)

  global $x;
  //mendefinisikan variabel x dengan mencari ada gak variabel x diluar function

  echo $x;
}

echo "Variabel GLOBAL";
echo "</br>";
tampilX();

// ada variabel SUPERGLOBAL
// (semua variabel superglobal merupakan array assosiative)
// $_COOKIE;
// $_GET;
// $_POST;
// $_REQUEST;
// $_SESSION;
// $_ENV;
// $_SERVER;

echo "Variabel SUPERGLOBAL";
echo "</br>";
var_dump($_GET);

echo "</br>";
echo "</br>";
echo "Isi 'Variabel SUPERGLOBAL SERVER' : ";
echo "</br>";
var_dump($_SERVER);

echo "</br>";
echo "</br>";
echo $_SERVER["SERVER_NAME"];
