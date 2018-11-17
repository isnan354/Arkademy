<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
  include 'head.php';

  
?>

<!DOCTYPE html>
<html>
  <head>
  <title>Selamat Datang</title>
    <!--<style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style> -->
  </head>
  <body>
  <div class="container">
	<div class="content">
		<div class="jumbotron">
			<style="text-align: right"><b>Selamat Datang</b><br/>
			<center>
			<h1>Data Produk </h1>			
		</div>
	</div>
		
	<div class="content">
		<center>
		
		<a href="mhs/mhs.php" class="btn btn-success">Produk</a>&nbsp;&nbsp;
		<a href="prodi/prodi.php" class="btn btn-success">Kategori</a>
		</center>
	</div>
	
	
</div>
  </body>
</html>
