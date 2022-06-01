<?php

session_start();

include 'koneksi.php';


if (empty($_SESSION['username'])) {

    echo "Please log in first to see this page.";
    header('Location: login.php');

    die();
}


echo "Welcome to the member's area, " . $_SESSION['username'] . "!";

if (isset($_GET['id'])) {
    $kode_pelanggan = $_GET['id'];
    $query = "select * from barang where kode_pelanggan='$kode_pelanggan'";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) {
        $kode_pelanggan = $hasil['kode_pelanggan'];
        $nama = stripslashes($hasil['nama']);
        $alamat = stripslashes($hasil['alamat']);
        $telp = $hasil['telp'];
        $kode_user = $hasil['kode_user'];
    }
} else {
    die("Error. NO Id Selected! ");
}
if (isset($_POST['sub'])) {
    $nama = $_POST['n2'];
    $alamat = $_POST['n3'];
    $telp = $_POST['n4'];
    $kode_user = $_POST['n5'];
    $query = "UPDATE barang SET nama='" . $nama . "',alamat='" . $alamat . "',telp=" . $telp .
        ",kode_user=" . $kode_user . "," .  
        " WHERE kode_pelanggan='" . $kode_pelanggan . "'";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo "<br>Data berhasil diupdate! Kembali ke display barang <a href='displaybarang.php'>klik di sini!</a>";
        header('Location: displaybarang.php');
    } else {
        echo "Gagal mengupdate data! Kembali ke display barang <a href='displaybarang.php'>klik di sini!</a>";
    }
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <a href="displaybarang.php" class="float-right btn btn-outline-primary mt-1">Kembali ke display barang</a>
                        <h4 class="card-title mt-2">Tambah Barang</h4>
                    </header>
                    <article class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Kode Pelanggan</label>
                                <input type="text" class="form-control" name="n1" value="<?php echo $kode_pelanggan; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" class="form-control" name="n2" value="<?php echo $nama; ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="n3" value="<?php echo $alamat; ?>">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="n4" value="<?php echo $telp; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kode User</label>
                                <input type="text" class="form-control" name="n5" value="<?php echo $kode_user; ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="sub"> Tambah </button>
                                <button type="submit" class="btn btn-secondary" name="res"> Reset </button>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>
</body>

</html>