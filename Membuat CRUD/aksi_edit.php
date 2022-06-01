<?php
     include('koneksi.php');

     $id = $_POST['id'];

     $nama   = $_POST['nama'];
     $nim    = $_POST['nim'];
     $alamat = $_POST['alamat'];

     $query = "UPDATE mhs SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id=$id";
     mysqli_query($konek , $query);

    ?>