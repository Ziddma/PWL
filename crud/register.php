<?php
include "koneksi.php";

if (isset($_SESSION['username'])) {
    header("Location: displaybarang.php");
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'] ?? null;

    if($username == "" || $password == "" || $role == null){
        echo "<script>alert('Data tidak boleh kosong!')</script>";
    } else {
        $sql = "INSERT INTO users (username, pass, role) VALUES ('$username', '$password', '$role')";
        $result = mysqli_query($conn, $sql);
        if ($result > 0) {
            echo "<script>alert('Data berhasil ditambahkan!')</script>";
        } else {
            echo "<script>alert('Data gagal ditambahkan!')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Sign up</h4>
                    </header>
                    <article class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" value="admin">
                                    <span class="form-check-label"> Admin </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" value="user">
                                    <span class="form-check-label"> User</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="register"> Register </button>
                            </div>
                        </form>
                    </article>
                    <div class="border-top card-body text-center">Sudah punya akun? <a href="login.php">Log In</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>