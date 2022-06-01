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

  if (empty($kode) or
      empty($judul) or
      ($tahun == "0"))
  {
    $msg = "Ada data yang perlu diisi";
    $alamat = "http://$NAMA_SERVER/tamfil1.php";
    $string_header = "Location: $alamat?msg=$msg" .
      "&kode=$kode&judul=$judul" .
      "&tahun=$tahun"; 
    header($string_header);
    exit();
  }

?>

<HTML>
<HEAD>
<TITLE>Menambah Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Informasi Penambahan Film</H1>
<HR>

<?php
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("binfilm", $id_mysql))
    die("Database tidak bisa dipilih");

  $query = "INSERT INTO film " .
    "(kode_film, judul, tahun)" .
    " VALUES ('$kode', '$judul', " .
    " '$tahun')";

  mysql_query($query, $id_mysql);
  if (mysql_affected_rows() > 0)
    print("Data $judul telah ditambahkan");
  else
    print("Penambahan gagal dilakukan");
?>

<BR>
<HR>
<A HREF="menubin.php">Menu Utama</A>

</CENTER>
</BODY>
</HTML>

