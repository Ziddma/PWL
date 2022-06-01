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

  if (empty($kode) or
      empty($nama) or
      ($tanggal == "0") or
      ($bulan == "0") or
      ($tahun == "0"))
  {
    $msg = "Ada data yang perlu diisi";
    $alamat = "http://$NAMA_SERVER/tambin1.php";
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
<TITLE>Menambah Data Bintang Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Informasi Penambahan Bintang Film</H1>
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
  
  $query = "INSERT INTO bintang " .
    "(kode_bintang,nama,tgl_lahir,sex," .
    "lokal, keterangan)" .
    " VALUES ('$kode', '$nama', " .
    " '$format_tanggal', '$sex', " .
    " '$kateg', '$ket')";

  mysql_query($query, $id_mysql);
  if (mysql_affected_rows() > 0)
    print("Data $nama telah ditambahkan");
  else
    print("Penambahan gagal dilakukan");
?>

<BR>
<HR>
<A HREF="menubin.php">Menu Utama</A>

</CENTER>
</BODY>
</HTML>

