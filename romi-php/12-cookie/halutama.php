<?php
  include "pass.inc";

  if (! password_valid($cookie_user,
                      $cookie_pass))
  {
    $alamat = "http://127.0.0.1/login.php";
    $msg = "Password tidak valid !";
    header("Location: $alamat?msg=$msg");
    exit();
  }
?>

<HTML>
<HEAD>
<TITLE>Halaman Utama</TITLE>
</HEAD>
<BODY>
<A HREF="hal1.php">Halaman 1</A>
<BR>
<A HREF="hal2.php">Halaman 2</A>
<BR>
<A HREF="logout.php">Logout</A>
<BR>
</BODY>
</HTML>
