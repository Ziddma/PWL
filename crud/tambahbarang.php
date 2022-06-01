<?php
session_start();

include 'koneksi.php';

if (empty($_SESSION['username'])) {

    echo "Please log in first to see this page.";
    header('Location: login.php');

    die();
}


if (isset($_POST['sub'])) {
    $kode_pelanggan = $_POST['n1'];
    $nama = $_POST['n2'];
    $alamat = $_POST['n3'];
    $telp = $_POST['n4'];
    $kode_user = $_POST['n5'];

    $query = "INSERT INTO barang VALUES('" . $kode_pelanggan . "','" . $nama . "','" . $alamat . "'," . $telp . "," . $kode_user . ")";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo "<br>Data berhasil ditambahkan! Kembali ke display barang <a href='displaybarang.php'>klik di sini!</a>";
        header('Location: displaybarang.php');
    } else {
        echo "Gagal menambahkan data! Kembali ke display barang <a href='displaybarang.php'>klik di sini!</a>";
    }
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                        <a href="displaybarang.php" class="float-right btn btn-outline-primary mt-1">Kembali ke display </a>
                        <h4 class="card-title mt-2">Tambah Data</h4>
                    </header>
                    <article class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Kode Pelanggan</label>
                                <input type="text" class="form-control" name="n1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" class="form-control" name="n2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="n3" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="n4" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Kode user</label>
                                <input type="text" class="form-control" name="n5" placeholder="">
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