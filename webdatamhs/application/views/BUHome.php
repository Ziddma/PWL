<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Halo Dunia</h2>
    <h3>Latihan Web menggunakan CI</h3>
    <a href="<?php echo base_url()."index.php/hal_admin/baca_form"; ?>">Nambah Data</a><br><br>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Nim</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        <?php
            foreach($dataMu as $dat){
        ?>
            <tr>
                <td><?php echo $dat['id']; ?></td>
                <td><?php echo $dat['nama']; ?></td>
                <td><?php echo $dat['nim']; ?></td>
                <td><?php echo $dat['alamat']; ?></td>
                <td>
                    <a href="<?php echo base_url()."index.php/hal_admin/hapus_Data/".$dat['id']; ?>">Hapus<a> | 
                    <a href="<?php echo base_url()."index.php/hal_admin/ambil_datawhere/".$dat['id']; ?>">Update<a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="<?php echo base_url()."index.php/hal_utama/logout/"; ?>">Log out</a>
    <!-- <?php
        // foreach($dataMu as $dat){
        //     echo "No:".$dat['id']."<br>";
        //     echo "Nama:".$dat['nama']."<br>";
        //     echo "Alamat:".$dat['alamat']."<br>";
        //     echo "NIM:".$dat['nim']."<br>"."<br>";  
        // }
        // echo "Selamat Datang kepada Pak ";
    ?> -->
</body>
</html>