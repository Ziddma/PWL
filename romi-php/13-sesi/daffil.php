<?php
  include "otentik.inc";

  header_dinamis();

  // Mengawali sesi
  session_start();

  if (! otentikasi($sesi_user, $sesi_pass))
  {
    $msg = "Harap diisi dengan benar";
    $alamat = "http://$NAMA_SERVER/loginbin.php";
    header("Location: $alamat?msg=$msg");
    exit();
  }
?>

<HTML>
<HEAD>
<TITLE>Daftar Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Mengubah/Menghapus Film</H1>
<HR>

<?php
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die ("Gagal koneksi ke database server");

  if (! mysql_select_db("binfilm", $id_mysql))
    die ("Gagal memilih database");
   
  $hasil = mysql_query(
    "SELECT kode_film, judul ".
    " FROM film ORDER BY judul",
    $id_mysql);

  print ("<TABLE BORDER=\"1\">\n");
  while ( $baris = mysql_fetch_row($hasil) )
  {
    print("<TR>");
    print("<TD>");
    print("$baris[1]");
    print("</TD>");
    print("<TD>");
    print("<A HREF=\"ubhfil1.php?kode=$baris[0]\">");
    print("Ubah</A>");
    print(" / ");
    print("<A HREF=\"hpsfil1.php?kode=$baris[0]\">");
    print("Hapus</A>");
    print("</TD></TR>");
  }

  print("</TABLE>");
?>

<BR>
<HR>
<A HREF="menubin.php">Menu Utama</A>

</CENTER>
</BODY>
</HTML>

