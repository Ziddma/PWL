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
        foreach($dataMu as $dat){
    ?>
    <form action="<?php echo base_url()."index.php/hal_admin/update_data" ?>" method="POST">
        No: <input type="text" name="id" value="<?php echo $dat['id']; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $dat['nama']; ?>"><br>
        Nim: <input type="text" name="nim" value="<?php echo $dat['nim']; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $dat['alamat']; ?>"><br>
        <input type="submit"> <input type="reset">
    </form>
    <?php } ?>
</body>
</html>