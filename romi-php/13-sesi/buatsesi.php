<?php
  session_start();

  print("Session_id : " .
        session_id() . "<BR>\n");

  session_destroy();

  print("Setelah sesi ditutup<BR>\n");
  print("Session_id : " .
        session_id() . "<BR>\n");

?>
