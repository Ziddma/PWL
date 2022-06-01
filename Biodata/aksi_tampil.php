<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
    <tr>
        <td>No</td>
        <td>Nama Lengkap</td>
        <td>Nim</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    
    <?php

include('koneksi.php');


$query = mysqli_query($konek, "SELECT * FROM mhs");
    while($data = mysqli_fetch_array($query)){
        echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['Nama']."</td>";
            echo "<td>".$data['Nim']."</td>";
            echo "<td>".$data['Alamat']."</td>";
            echo "<td>"."<a href='aksi_delete.php?id=".$data['id']."'>Hapus</a>"."</td>";
            echo "<td>"."<a href='form_edit.php?id=".$data['id']."'>|Edit</a>"."</td>";
        echo "</tr>";
    }
?>

</table>
</body>
</html>

