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

  if (empty($kode))
  {
    $alamat = "http://$NAMA_SERVER/daffil.php";
    header("Location: $alamat");
    exit();
  }

?>

<HTML>
<HEAD>
<TITLE>Menghapus Data Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Informasi Penghapusan Film</H1>
<HR>

<?php
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("binfilm", $id_mysql))
    die("Database tidak bisa dipilih");

  $query = "SELECT judul FROM film " .
    "WHERE kode_film = '$kode'";
  
  $hasil = mysql_query($query, $id_mysql);
  $baris = mysql_fetch_array($hasil);
  $judul = $baris[0];

  $query = "DELETE FROM film " .
    "WHERE kode_film = '$kode'";

  mysql_query($query, $id_mysql); 
  if (mysql_affected_rows() > 0)
    print("Data $judul telah dihapus");
  else
    print("Penghapusan gagal dilakukan");
?>

<BR>
<HR>
<A HREF="daffil.php">Menu Film</A>

</BODY>
</HTML>

