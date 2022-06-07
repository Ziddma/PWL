<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url()."index.php/hal_admin/tambah_Data" ?>" method="POST">
        Nama: <input type="text" name="nama"><br>
        Nim: <input type="text" name="nim"><br>
        Alamat: <input type="text" name="alamat"><br>
        <input type="submit"> <input type="reset">
</body>
</html>