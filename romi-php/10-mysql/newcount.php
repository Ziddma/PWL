<HTML>
<HEAD>
<TITLE>Contoh Counter Menggunakan MySQL</TITLE>
</HEAD>
<BODY>

<?php
  $pemakai  = "php";
  $password = "pinguin";
  $database = "test";

  $id_mysql = mysql_connect("localhost",
                            $pemakai,
                            $password);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  // Mengunci tabel counter
  $hasil = mysql_db_query($database,
                  "LOCK TABLES counter WRITE",
                  $id_mysql);
  if (! $hasil)
    die("Permintaan gagal dilaksanakan");

  // Membaca nilai pencacah
  $hasil = mysql_db_query($database,
                  "SELECT * FROM counter",
                  $id_mysql);

  $data = mysql_fetch_row($hasil);
  $pencacah = $data[0];

  // Naikkan pencacah
  $pencacah++;

  // Simpan nilai pencacah ke tabel counter
  $perintah_update =
    "UPDATE counter SET pencacah = $pencacah";

  $hasil = mysql_db_query($database,
                  $perintah_update,
                  $id_mysql);

  // Bebaskan penguncian
  $hasil = mysql_db_query($database,
                  "UNLOCK TABLES",
                  $id_mysql);

  // Tutup hubungan ke MySQL
  mysql_close($id_mysql);

  // Tampilkan
  print("Anda adalah pengunjung ke-$pencacah");
?>

</BODY>
</HTML>
