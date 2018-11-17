<?php
  // buat koneksi dengan database mysql
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'arkademy';
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal') ;
  $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal') ;
  $konek = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal') ;

  
?>
