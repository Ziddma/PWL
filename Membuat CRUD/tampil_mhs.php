<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table border ="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>NIM</td>
            <td>Alamat</td>
            <td>Aksi</td>
</tr>
<?php   
    include('koneksi.php');

     $query = mysqli_query($konek , "SELECT * FROM mhs ");
     while($data = mysqli_fetch_array($query)){
         echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['nim']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>"."<a href='aksi_hapus.php?id=".$data['id']."'>Hapus</a>";
            echo " | ";
            echo "<a href='form_edit.php?id=".$data['id']."'>Edit</a>"." </td>";
         echo "</tr>";
         }

    ?>
    </table>
</body>

