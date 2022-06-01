<?php
  session_start();

  print("SID : " . session_id() . "<BR>\n");
  print("Variabel sesi var_x  <BR>\n");
  print("diakses dari bacasesi.php : <BR>\n");
  print($var_x);
?>
