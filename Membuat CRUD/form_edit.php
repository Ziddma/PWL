<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    include('koneksi.php');

    $id = $_GET['id'];

    $query = mysqli_query($konek , "SELECT * FROM mhs WHERE id=$id ");
    $data = mysqli_fetch_array($query);
?>



    <form action="aksi_edit.php"method="post">
        <div>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        </div>
        <div>
            <label for="">Input Nama</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
        </div>
        <div>
            <label for="">Input Alamat</label>
            <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
        </div>
        <div>
            <label for="">Input NIM</label>
            <input type="text" name="nim" value="<?php echo $data['nim']; ?>">
        </div>
        <div>
            <input type="submit" value ="submit">
       </div>
       </label>
        
    </form>
</body>
</html>