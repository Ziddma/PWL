<?php
  include "umum.inc";

  session_start();
  session_destroy();

  $alamat = "http://$NAMA_SERVER/loginbin.php";
  header("Location: $alamat");
?>
