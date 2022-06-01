<HTML>
<HEAD>
<TITLE>Menampilkan Daftar Database</TITLE>
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

  $hasil = mysql_list_dbs($id_mysql);
  while ( $db = mysql_fetch_row($hasil) )
  {
    print("Database: $db[0]<BR>\n");
  }

  mysql_close($id_mysql);
?>
</BODY>
</HTML>
