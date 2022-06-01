<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>

    <form action="aksi_tampil.php" method="POST">
    <table>

    <tr>
        
        <td><label for="nama">Nama :</label></td>
        <td><br></td>
        <td><input type="text" name="nama"></td>
    </tr>

    <tr>
        
        <td><label for="">Alamat</label></td>
        <td><br></td>
        <td><input type="text" name="alamat" > </td>
    </tr>

    <tr>
        <td><label for="">NIM</label></td>
        <td><br></td>
        <td><input type="text" name="nim"></td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="submit" value="Simpan"></td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="submit" value="delete"></td>
    </tr>


    </table>

    
</body>
</html>