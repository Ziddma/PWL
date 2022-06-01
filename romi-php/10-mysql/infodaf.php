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

  while ( $objek = mysql_fetch_field($hasil) )
  {
    $ket_kunci = $objek->primary_key ? "Ya": "Tidak";

    print("Nama kolom : $objek->name<BR>\n");
    print("Panjang kolom : $objek->max_length<BR>\n");
    print("Sebagai kunci primer: $ket_kunci<BR>\n");
    print("<BR>\n");
  }

  mysql_close($id_mysql);
?>
</BODY>
</HTML>
