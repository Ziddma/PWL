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

    // Menampilkan nama-nama tabel
    $hasil_tabel = mysql_list_tables($db[0]);
    while ($nama_tabel = mysql_fetch_row(
                            $hasil_tabel))
    {
      print("---Tabel : $nama_tabel[0]<BR>\n");

      // Menampilkan nama-nama kolom
      $hasil_field = mysql_list_fields(
                            $db[0],
                            $nama_tabel[0]);
      $jum_kolom = mysql_num_fields($hasil_field);
      for($i = 0; $i < $jum_kolom; $i++)
      {
        $nama = mysql_field_name($hasil_field, $i);
        print("****** Kolom : $nama<BR>\n");
      }
    }
  }

  mysql_close($id_mysql);
?>
</BODY>
</HTML>
