<?php
  session_start();

  print("SID : " . session_id() . "<BR>\n");
  print("Variabel sesi var_x  <BR>\n");
  print("diakses dari unreg.php : <BR>\n");
  print("$var_x <BR>\n");

  session_unregister("var_x");
  print("Isi var_x setelah di-unregister: ".
        "$var_x <BR>\n");

  print("SID : " . session_id() . "<BR>\n");
?>
