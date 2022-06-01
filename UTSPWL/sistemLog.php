<?php

	$username = $_POST['id'];
	$password = $_POST['pass'];

	if($username == 'ADMIN' AND $password == 'ADMIN')
	{
		session_start();//untuk memulai session
		//melakukan assignment terhadap variabel session
		$_SESSION['uname'] = $username;
		$_SESSION['jam_mulai'] = date("H:i:s");
		$_SESSION['jam_selesai'] = date("Y-m-d H:i:s",strtotime("+1 hour"));
		$_SESSION['isLogin'] = true;

		header("Location: homepage.php");
	}
	else
	{
		echo "Username atau password salah";
	}
