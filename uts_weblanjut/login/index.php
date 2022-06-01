<?php
session_start();

include("../config/app.php");
include("../config/proses.php");

if (isset($_POST['username']) && isset($_POST['password'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];
   $pass = $_POST['password'];

   $result = $db->query("SELECT * FROM users WHERE username='$username' AND password=md5('$password')");

   $row = [];

   foreach ($result as $key => $item) {
      $row = $item;
   }

   if (is_array($row) && !empty($row)) {
      $validuser = $row['id'];
      $_SESSION['valid'] = $validuser;
   } else {
      echo "Invalid username or password.";
      echo "<br/>";
      echo "<a href='login.php'>Go back</a>";
   }
}

if (isset($_SESSION['valid'])) {
   header('Location: ../dashboard');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
   <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
   <meta name="author" content="pixelstrap">
   <link rel="icon" href="http://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
   <link rel="shortcut icon" href="http://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
   <title>Cuba - Premium Admin Template</title>
   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/css/fontawesome.css">
   <!-- ico-font-->
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/css/icofont.css">
   <!-- Themify icon-->
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/css/themify.css">
   <!-- Flag icon-->
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/css/flag-icon.css">
   <!-- Feather icon-->
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/css/feather-icon.css">
   <!-- Plugins css start-->
   <!-- Plugins css Ends-->
   <!-- Bootstrap css-->
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/css/bootstrap.css">
   <!-- App css-->
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/login/login/style.css">
   <link rel="stylesheet" type="text/css" href="<?= $app['base_url'] ?>/assets/login/login/responsive.css">
</head>

<body>
   <!-- login page start-->
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-7"><img class="bg-img-cover bg-center" src="http://admin.pixelstrap.com/cuba/assets/images/login/2.jpg" alt="looginpage"></div>
         <div class="col-xl-5 p-0">
            <div class="login-card">
               <div>
                  <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="http://admin.pixelstrap.com/cuba/assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="http://admin.pixelstrap.com/cuba/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                  <div class="login-main">
                     <form method="post" class="theme-form">
                        <h4>Masuk ke akun anda </h4>
                        <p>Masukan Username dan Password Anda</p>

                        <div class="card" style="box-shadow: 0 0 0px #FFFFFF;border-radius:5px;background-color: #F7F6FD">
                           <div class="card-body" style="padding: 15px">
                              <p style="margin-bottom: 0px;">
                                 Role Admin<br>
                                 Username : admin<br>
                                 Password : admin<br>
                                 <br>
                                 Role Pengguna<br>
                                 Username : pengguna<br>
                                 Password : pengguna<br>
                              </p>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-form-label">Username</label>
                           <input class="form-control" type="text" name="username" required="" placeholder="admin">
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Password</label>
                           <div class="form-input position-relative">
                              <input class="form-control" type="password" name="password" required="" placeholder="*********">
                              <div class="show-hide"><span class="show"> </span></div>
                           </div>
                        </div>
                        <div class="form-group mb-0">
                           <div class="checkbox p-0">
                              <input id="checkbox1" type="checkbox">
                              <label class="text-muted" for="checkbox1">Remember password</label>
                           </div>
                           <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                        </div>

                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- latest jquery-->
      <script src="<?= $app['base_url'] ?>/assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?= $app['base_url'] ?>/assets/js/bootstrap/popper.min.js"></script>
      <script src="<?= $app['base_url'] ?>/assets/js/bootstrap/bootstrap.js"></script>
      <!-- feather icon js-->
      <script src="<?= $app['base_url'] ?>/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?= $app['base_url'] ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="<?= $app['base_url'] ?>/assets/login/login/config.js"></script>
      <script src="<?= $app['base_url'] ?>/assets/login/login/script.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <!-- login js-->
      <!-- Plugin used-->
   </div>
</body>

</html>