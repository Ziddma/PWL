<?php
  include "umum.inc";

  function otentikasi($pemakai, $password)
  {
    global $NAMA_SERVER, $NAMA_USER, $PASSWORD;

    $id_mysql = mysql_pconnect($NAMA_SERVER,
                               $NAMA_USER,
                               $PASSWORD);
    if (! $id_mysql)
       return FALSE;

    if (! mysql_select_db("binfilm", $id_mysql))
       return FALSE;

    
    $hasil = mysql_query(
      "SELECT password FROM pemakai " .
      "WHERE nama = '$pemakai'",
      $id_mysql);

    if (! $hasil)
      return FALSE;

    $kode_rahasia = md5($password);
    $baris = mysql_fetch_row($hasil);
    if ($baris[0] == $kode_rahasia)
      return TRUE;
    else
      return FALSE;
  }
?>
