<?php
  require_once 'database.php';
  include "uploadFoto.php";
  $id=$_POST['tid'];
  $nama=$_POST['tnama'];
  $hrg=$_POST['thrg'];
  $ket=$_POST['tket'];
  $jml=$_POST['tjml'];
  
  if (upload_foto($_FILES["foto"])){
	$foto=$_FILES["foto"]["name"];
	$db=new Database();
	$hasil=$db->insProduk($id,$nama,$hrg,$jml,$ket,$foto);
	if ($hasil)
		header("location:produk.php");  
	else
		echo "Penambahan data gagal..";
  } else
	 echo "Sorry, there was an error uploading your file."; 
?>
