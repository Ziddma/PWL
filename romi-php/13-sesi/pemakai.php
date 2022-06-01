<?php
  include "umum.inc";

  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("binfilm", $id_mysql))
    die("Database tidak bisa dipilih");

  $pass1 = md5('bintang1');
  mysql_query(
    "INSERT INTO pemakai " .
    "VALUES ('bintang1', '$pass1')",
    $id_mysql) or
    die("Tak dapat menambahkan data 1");

  $pass2 = md5('bintang2');
  mysql_query(
    "INSERT INTO pemakai " .
    "VALUES ('bintang2', '$pass2')",
    $id_mysql) or
    die("Tak dapat menambahkan data 2");

  print("Selesai");

?>
