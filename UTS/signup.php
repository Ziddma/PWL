<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="asset/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="signup.css" />
    <title>Signup</title>
  </head>
  <body>
    <div class="box-signup">
      <div class="img-ilustration">
        <img src="asset/signup-ilustration.png" />
      </div>
      <div class="box-text">
        <div class="text-header">
          <h2>Buat Akun</h2>
        </div>
        <div class="back-button">
          <a><img src="asset/Back button.png" /></a>
          <button onclick="history.back()"><img src="asset/Back button.png" /></button>
        </div>
        <div class="row justify-content-between items-align-center" id="box-other-login">
          <div class="col-6">
            <a href="https://accounts.google.com/signin/v2/identifier?hl=id&refresh=1)%2C&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="asset/google-icon.png" width="33 34" /> Masuk dengan Google</a>
          </div>

          <div class="col-6">
            <a href="https://m.facebook.com/login/?locale=id_ID"><img src="asset/fb-icon.png" />Masuk dengan Facebook</a>
          </div>
        </div>
        <div class="row"><p>Atau</p></div>

        <form id="form-box" action="register.php" method="POST">
          <div class="mb-4">
            <input type="text" class="form-control" id="nama-lengkap" placeholder="Nama Lengkap" />
          </div>
          <div class="mb-4">
            <input type="email" class="form-control" id="femail" name="femail" placeholder="Email" />
          </div>
          <div class="mb-4">
            <input type="password" class="form-control" id="fpassword" name="fpassword" placeholder="Password" />
          </div>
          <div class="signup-btn">
            <button type="submit" class="btn btn-primary" id="signup-btn">Register</button>
          </div>
          <div class="login">
            <h6 id="show-login">Sudah memiliki akun?<a href="login.php" style="color: blue">Masuk</a></h6>
          </div>
        </form>

      </div>

    </div>
    <script src="login-overlay.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
