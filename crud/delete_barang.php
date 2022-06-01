<?php

session_start();

include 'koneksi.php';


if(empty($_SESSION['username'])) {


    echo "Please log in first to see this page.";
    header('Location: login.php');


    die();
}



echo "Welcome to the member's area, " . $_SESSION['username'] . "!";

if (isset($_GET['id'])) {
    $kode_pelanggan = $_GET['id'];
} else {
    die("Error. NO Id Selected! ");
}
?>
<html>

<head>
    <title>Delete Data</title>
</head>

<body>
    <?php
    //proses delete barang
    if($_SESSION['username']) {
        if (!empty($kode_pelanggan) && $kode_pelanggan != "") {
            $query = "DELETE FROM barang WHERE kode_pelanggan='$kode_pelanggan'";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                echo "<h2><font color=blue>Barang telah berhasil dihapus</font></h2>";
            } else {
                echo "<h2><font color=red>Barang gagaldihapus</font></h2>";
            }
            echo "Klik <a href='displaybarang.php'>di
    sini</a> untuk kembali ke halaman display barang";
    
            header("Location: displaybarang.php");
        } else {
            die("Access Denied");
        }
    } else {
        die("Access Denied");
    }
    ?>
</body>

</html>