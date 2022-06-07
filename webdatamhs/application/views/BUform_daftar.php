<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Halaman Daftar</h2>
    <form action="<?php echo base_url()."index.php/hal_utama/aksi_daftar"; ?>" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit"> <input type="reset">
    </form>
    <a href="<?php echo base_url()."index.php/hal_utama/"; ?>">Login</a>
</body>
</html>