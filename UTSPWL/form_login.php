<?php
	if(isset($_GET['message']))
	{
		if($_GET['message']=='nologin')
		{
			echo "<br>";
		}
		elseif($_GET['message']=='logout')
		{
			echo "Anda berhasil logout";
		}
		elseif($_GET['message']=="blabla")
		{
			echo "Anda menulis blabla";
		}
	}
?>

	<!doctype html>
	<html lang="en">
	  <head>
		<title>Login</title>
		<style>
			.log{
				margin: 16%;
			}
		</style>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Bootstrap CSS v5.0.2 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	  </head>
	  <body>		  
		<!-- Bootstrap JavaScript Libraries -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	  
	</html>
	<div class="log">
	<center>	<h1>Manage System Toko ABC</h1> </center>
	<form action="sistemLog.php" method="POST">	
		<div class="input-group mb-5">
			<span class="input-group-text col-6" id="prefixId">Username</span>
			<input type="text" name="id" id="id" class="form-control" placeholder="Toko ABC User" aria-describedby="prefixId" required>
		</div>
		<div class="input-group mb-5">
			<span class="input-group-text col-6" id="prefixId">Password</span>
			<input type="password" name="pass" id="pass" class="form-control" placeholder="Toko ABC password" aria-describedby="prefixId" required>
		</div>
		<center><input type="submit" value="Login" class=" btn btn-success col-5"></center>
	</form>
	</div>
	</body>