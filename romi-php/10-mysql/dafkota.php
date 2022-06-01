<HTML>
<HEAD>
<TITLE>Menampilkan Daftar Kota</TITLE>
</HEAD>
<BODY>
<?php
  $pemakai  = "php";
  $password = "pinguin";
  $id_mysql = mysql_connect("localhost",
                            $pemakai,
                            $password);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("bukualmt", $id_mysql))
    die("Database tidak bisa dipilih");

  $hasil = mysql_query("SELECT * FROM kota",
                       $id_mysql);
  if (! $hasil)
    die("Permintaan gagal dilaksanakan");

  while ( $baris = mysql_fetch_row($hasil) )
  {
    print("$baris[0] - $baris[1]<BR>\n");
  }

  mysql_close($id_mysql);
?>
</BODY>
</HTML>
