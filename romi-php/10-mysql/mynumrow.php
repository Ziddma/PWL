<HTML>
<HEAD>
<TITLE>Mengetahui Jumlah Hasil Permintaan</TITLE>
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

  $jum_kolom = mysql_num_rows($hasil);
  print("Jumlah kolom : $jum_kolom<BR>\n");
            
  $jum_baris = mysql_num_rows($hasil);
  print("Jumlah baris : $jum_baris<BR>\n");

  mysql_close($id_mysql);
?>
</BODY>
</HTML>
