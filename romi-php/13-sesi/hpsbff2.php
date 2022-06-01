<?php
  include "otentik.inc";

  session_start();

  if (! otentikasi($sesi_user, $sesi_pass))
  {
    $msg = "Harap diisi dengan benar";
    $alamat = "http://$NAMA_SERVER/loginbin.php";
    header("Location: $alamat?msg=$msg");
    exit();
  }

  if (empty($kode_bintang)) 
  {
    $alamat = "http://$NAMA_SERVER/dafbff.php";
    header("Location: $alamat");
    exit();
  }

?>

<HTML>
<HEAD>
<TITLE>Menghapus Bintang Film & Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Informasi Penghapusan Bintang Film & Film</H1>
<HR>

<?php
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("binfilm", $id_mysql))
    die("Database tidak bisa dipilih");

  foreach ($kf as $kunci => $nilai)
  {
     $kode_film = $daftar[$kunci];
     $query1 = "DELETE FROM main " .
       " WHERE kode_bintang = '$kode_bintang' AND " .
       " kode_film = '$kode_film'";

     mysql_query($query1, $id_mysql);
     if (mysql_affected_rows() > 0)
       $status_query = "Berhasil";
     else
       $status_query = "Gagal";

     $query2 = "SELECT judul " .
       " FROM film " .
       " WHERE kode_film = '$kode_film'";
     $hasil = mysql_query($query2, $id_mysql);
     $baris = mysql_fetch_row($hasil);
     $judul_film = $baris[0];

     print("Status penghapusan $judul_film : ");
     print("$status_query <BR>\n");
  }

?>

<BR>
<HR>
<A HREF="dafbff.php">Menu Bintang Film & Film</A>

</BODY>
</HTML>

