<?php 

// cara biasa
  // $_GET["nama"] = "Fernanda Sabitah Ramelia";
  // $_GET["nim"] = "2120803051";
  // var_dump($_GET);

//Cara Lain
  //Menggunakan string didalam URL-nya atau dialamat websitenya
  //Langkah 1 - arahkan kursor ke url
  //Langkah 2 - tambahkan "?" disebuah URL (artinya saya ingin memasukkan data kesini [masukkannya kedalam variabel $_GET])
    //Cara nulisnya:
    //http://localhost/PHP/Pertemuan%2011/Coba2.php?nama=Fernanda Sabitah
    //key = nama
    //value = Fernanda Sabitah
    //artinya: saya bisa mengirimkan data ke halaman ini menggunakan metode request GET

    //kalo mau mengirimkan data yang lain
    //tambahkan & dibelakang lalu masukkan 
    //http://localhost/PHP/Pertemuan%2011/Coba2.php?nama=Fernanda Sabitah&nim=2120803051


var_dump($_GET);

?>