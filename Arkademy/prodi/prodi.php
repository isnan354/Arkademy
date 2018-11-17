<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include '../koneksi.php';
  include 'head.php';
?>

<!DOCTYPE html>
<html>
  <head>
	<title>Tabel Kategori</title>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
	<div class="jumbotron">
		
		<h1>Tabel Kategori</h1>
    </div>
	
	<div class="container">
	
	<br/>
    <table class="table table-striped">
      <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Waktu Input</th>
      </tr>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM product_categories ORDER BY id ASC";
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
        echo "<td>$data[created_date]</td>";
        
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
	</div>
	    <br><center><a href="../index.php" class="btn btn-primary"><< Kembali</a></center>
  </body>
</html>
