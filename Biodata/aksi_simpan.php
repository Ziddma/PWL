<?php

include('koneksi.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nim = $_POST['nim'];


$perintah = "INSERT INTO mhs(Nama, Nim, Alamat) VALUES ('$nama','$nim','$alamat')";
mysqli_query($konek, $perintah);


?>
    