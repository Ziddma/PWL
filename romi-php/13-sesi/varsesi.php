<?php
  session_register("var_x");
  $var_x = "123456";

  print("Pengenal sesi: " .
        session_id() . "<BR>\n");
  print("Isi variabel sesi : $var_x");
?>
