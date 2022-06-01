<?php

include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nim = $_POST['nim'];


$perintah = "UPDATE mhs SET Nama='$nama', Nim='$nim', Alamat='$alamat' WHERE id=$id";
mysqli_query($konek, $perintah);


?>
    