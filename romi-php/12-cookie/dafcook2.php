<?php
  while (list($nama, $nilai) =
         each($HTTP_COOKIE_VARS))
  {
    print("$nama : $nilai <BR>\n");
  }
?>
