<?php
  // Pasang cookie
  setcookie("cookie_user", $pemakai);
  setcookie("cookie_pass", $sandi);

  $alamat = "http://127.0.0.1/halutama.php";
  header("Location: $alamat");
?>
