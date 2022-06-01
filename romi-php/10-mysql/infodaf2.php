<HTML>
<HEAD>
<TITLE>Menampilkan Info Kolom Tabel daftar</TITLE>
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

  $hasil = mysql_query("SELECT * FROM daftar",
                       $id_mysql);
  if (! $hasil)
    die("Permintaan gagal dilaksanakan");

  $jum_kolom = mysql_num_fields($hasil);

  for($i = 0; $i < $jum_kolom; $i++)
  {
    $nama_kolom    = mysql_field_name($hasil, $i);
    $tipe_kolom    = mysql_field_type($hasil, $i);
    $panjang_kolom = mysql_field_len($hasil, $i);
    $nama_kolom    = mysql_field_name($hasil, $i);
    $flag_kolom    = mysql_field_flags($hasil, $i);

    print("Nama kolom    : $nama_kolom<BR>\n");
    print("Tipe kolom    : $tipe_kolom<BR>\n");
    print("Panjang kolom : $panjang_kolom<BR>\n");
    print("Flag kolom    : $flag_kolom<BR>\n");
    print("<BR>\n");
  }

  mysql_close($id_mysql);
?>

</BODY>
</HTML>
