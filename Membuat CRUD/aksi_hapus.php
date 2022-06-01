<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $query = "DELETE FROM `mhs` WHERE id=$id";
    mysqli_query($konek , $query);
    ?>