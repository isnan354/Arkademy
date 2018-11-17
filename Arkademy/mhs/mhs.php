<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include '../koneksi.php';
  include 'head.php';
	$batas = 5;
    $halaman = @$_GET['halaman'];
    if (empty($halaman))  {
            $posisi = 0;
            $halaman = 1;
        }
        else {
            $posisi = ($halaman-1) * $batas;
        }
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tabel Mahasiswa</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>

  </head>
  <body>
  <div class="container">
  <div class="jumbotron">
    
    <h1>Tabel Produk</h1><br>
	<div class="content">
   
    <br/>
    <table class="table table-dark table-striped">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Waktu Input</th>
      </tr>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
				
      $query = "SELECT a.*,b.name as namakategori
				FROM 
				products a JOIN product_categories b 
				ON a.category_id = b.id";
	  
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[name]</td>"; //menampilkan nama
        echo "<td>$data[namakategori]</td>"; //menampilkan kategory
        echo "<td>$data[created_date]</td>";
        
       
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
		    <br><center><a href="../index.php" class="btn btn-primary"><< Kembali</a></center>
	</div>
	</div>
	</div>
	</body>
</html>
