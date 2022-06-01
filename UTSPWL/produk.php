<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko ABC</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	

  </head>
  
  <body>
	  <!-- navbar start --> 
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Produk</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="user.php">User</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="logout.php">logout</a>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>    
	  <!-- navbar end --> 

	<div class="container">
	<?php
	  require_once'database.php';
	  $db=new Database();
	  $hasil=$db->produkAll();  
	  echo "<a href='addBrg.php' class='btn btn-success text-white'>Tambah Data</a>";

	  if ($hasil->num_rows>0) {
		echo "<table class='table table-striped'>
		   <thead>
			<tr>					
			<th scope='col'>No</th>
			<th scope='col'>Nama</th>
			<th scope='col'>Harga</th>
			<th scope='col'>Stok</th>
			<th scope='col'>Keterangan</th>
			<th scope='col'>Foto</th>
			<th scope='col'>Edit</th>
			<th scope='col'>Hapus</th>
			</tr>
		    </thead>
		    <tbody>";
			while ($row=$hasil->fetch_assoc()){
				$teks="<tr>";
				$teks.="<td>".$row["id"]."</td>";
				$teks.="<td>".$row["nama"]."</td>";			
				$teks.="<td>".$row["hrg"]."</td>";
				$teks.="<td>".$row["jml"]."</td>";
				$teks.="<td>".$row["keterangan"]."</td>";
				$teks.="<td><img src='img/".$row["foto"]."' style='width:100px;height:100px;'></img></td>";
				$teks.="<td><a href='editBrg.php?id=".htmlentities($row["id"])."'>Edit</a></td>";
				$teks.="<td><a href='delBrg.php?id=".htmlentities($row["id"])."'>Hapus</a></td>";
				$teks.="</tr>";	
				echo $teks;
			}		
			echo "</tbody>
			      </table>";
		
		} else {
			echo "jml rec: 0 " ;
		}
		//$conn->close();
	?>	

	</div>	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
 
