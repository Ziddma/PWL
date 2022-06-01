<?php
  function password_valid($pemakai, $password)
  {
    if ( (strtoupper($pemakai) == "USER1") and
         ($password == "parkit") )
      return TRUE;

    if ( (strtoupper($pemakai) == "USER2") and
         ($password == "merak") )
      return TRUE;

    return FALSE;
  }
?>
