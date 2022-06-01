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

  // Validasi Data
  //  Anda dapat menambahkan sendiri untuk
  //  memeriksa keabsahan tanggal

  if (empty($kode))
  {
    $alamat = "http://$NAMA_SERVER/daffil.php";
    header("Location: $alamat");
    exit();
  }

  if (empty($judul) or ($tahun == "0"))
  {
    $msg = "Ada data yang perlu diisi";
    $alamat = "http://$NAMA_SERVER/ubhfil1.php";
    $string_header = "Location: $alamat?msg=$msg" .
      "&kode=$kode&judul=$judul" .
      "&tahun=$tahun" ;
    header($string_header);
    exit();
  }

?>

<HTML>
<HEAD>
<TITLE>Mengubah Data Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Informasi Pengubahan Film</H1>
<HR>

<?php
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("binfilm", $id_mysql))
    die("Database tidak bisa dipilih");

  $format_tanggal = sprintf("%02d%02d%02d",
                            $tahun,
                            $bulan,
                            $tanggal);
  
  $query = "UPDATE film " .
    "SET judul = '$judul', " .
    "tahun = '$tahun' " .
    "WHERE kode_film = '$kode'";

  mysql_query($query, $id_mysql);
  if (mysql_affected_rows() > 0)
    print("Data $judul telah diubah");
  else
    print("Pengubahan gagal dilakukan");
?>

<BR>
<HR>
<A HREF="daffil.php">Menu Film</A>

</BODY>
</HTML>

