<?php
     include('koneksi.php');

     $nama   = $_POST['nama'];
     $nim    = $_POST['NIM'];
     $alamat = $_POST['alamat'];

     $query = "INSERT INTO mhs(nama, nim, alamat) VALUES ('$nama' ,'$nim' ,'$alamat')";
     mysqli_query($konek , $query);

    ?>