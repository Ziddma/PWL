<?php
  
  include "pass.inc";

  if (!password_valid($cookie_user,
                      $cookie_pass))
  {
    die("Maaf. Anda tidak bisa mengakses" .
        " halaman 1");
  }
?>

<HTML>
<HEAD>
<TITLE>Halaman 1</TITLE>
</HEAD>
<BODY>
Anda bisa melihat halaman ini<BR>
hanya kalau Anda telah melakukan login
</BODY>
</HTML>
