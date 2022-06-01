
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="card login-form">
        <div class="exit-button">
          <a><img src="asset/exit-icon.png" /></a>
          <button onclick="history.back()"><img src="asset/Back button.png" /></button>
        </div>
        <div class="card-body">
          <h2 class="card-title">Masuk</h2>
          <div class="card-subtitle"><h4>Masuk dan segera dapatkan manfaatnya</h4></div>

          <form action="aksi_login.php" method="POST">
            <div class="mb-4">
              <label for="exampleInputEmail1" class="form-label" aria-placeholder="Email">Email</label>
              <input type="email" class="form-control" id="femail" aria-describedby="emailHelp" name="femail" />
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="fpassword" name="fpassword" />
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" />
              <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
              <a href="#">Lupa sandi?</a>
            </div>
            <div class="row justify-content-center" id="login">
              <button type="submit" value="flogin" name="flogin" class="btn btn-primary items-align-center">Login</button>
            </div>

            <div class="belum">
              <h6>Belum terdaftar?<a href="signup.php">Buat Akun</a></h6>
            </div>
          </form>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
