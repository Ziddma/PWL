<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>

    <?php
    include('koneksi.php');

    $id = $_GET['id'];

    $query = mysqli_query($konek, "SELECT * FROM mhs WHERE id=$id");
    $data = mysqli_fetch_array($query);
    ?>

    <form action="aksi_edit.php" method="POST">
        <input type="hidden" nama="id" value="<?php echo $data['id'];?>">
    <table>

    <tr>
        
        <td><label for="nama">Nama :</label></td>
        <td><br></td>
        <td><input type="text" name="nama" value="<?php echo $data['Nama'];?>"></td>
    </tr>

    <tr>
        
        <td><label for="">Alamat</label></td>
        <td><br></td>
        <td><input type="text" name="alamat" value="<?php echo $data['Alamat'];?>" > </td>
    </tr>

    <tr>
        <td><label for="">NIM</label></td>
        <td><br></td>
        <td><input type="text" name="nim" value="<?php echo $data['Nim'];?>"></td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="submit"></td>
    </tr>


    </table>

    
</body>
</html>