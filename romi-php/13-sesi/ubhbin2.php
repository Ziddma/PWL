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
    $alamat = "http://$NAMA_SERVER/dafbin.php";
    header("Location: $alamat");
    exit();
  }

  if (empty($nama) or
      ($tanggal == "0") or
      ($bulan == "0") or
      ($tahun == "0"))
  {
    $msg = "Ada data yang perlu diisi";
    $alamat = "http://$NAMA_SERVER/ubhbin1.php";
    $string_header = "Location: $alamat?msg=$msg" .
      "&kode=$kode&nama=$nama" .
      "&tanggal=$tanggal" .
      "&bulan=$bulan" .
      "&tahun=$tahun" .
      "&sex=$sex&kateg=$kateg" .
      "&ket=$ket";
    header($string_header);
    exit();
  }

?>

<HTML>
<HEAD>
<TITLE>Mengubah Data Bintang Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Informasi Pengubahan Bintang Film</H1>
<HR>

<?php
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  if (! mysql_select_db("binfilm", $id_mysql))
    die("Database tidak bisa dipilih");

  $format_tanggal = sprintf("%04d-%02d-%02d",
                            $tahun,
                            $bulan,
                            $tanggal);
  
  $query = "UPDATE bintang " .
    "SET nama = '$nama', " .
    "tgl_lahir = '$format_tanggal', " .
    "sex = '$sex', ".
    "lokal = '$kateg', " .
    "keterangan = '$ket' " .
    "WHERE kode_bintang = '$kode'";

  mysql_query($query, $id_mysql);
  if (mysql_affected_rows() > 0)
    print("Data $nama telah diubah");
  else
    print("Pengubahan gagal dilakukan");
?>

<BR>
<HR>
<A HREF="dafbin.php">Menu Bintang Film</A>

</BODY>
</HTML>

