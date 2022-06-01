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
?>

<HTML>
<HEAD>
<TITLE>Menghapus Bintang Film & Film</TITLE>
</HEAD>
<BODY>
<CENTER>

<?php
  // Koneksi ke database
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die ("Gagal koneksi ke database server");

  if (! mysql_select_db("binfilm", $id_mysql))
    die ("Gagal memilih database");

  $hasil = mysql_query (
    "SELECT nama FROM bintang " .
    " WHERE kode_bintang = '$kode_bintang'",
    $id_mysql);

  $baris = mysql_fetch_row($hasil);
  if ($baris == FALSE)
    die("Tak ada data yang memenuhi");

  print("<H2>Bintang Film: $baris[0]</H2><BR>\n");
  print("Centang film yang akan dihapus<BR>\n");
  print("<HR>");

  $hasil = mysql_query (
    "SELECT main.kode_film, film.judul ".
    " FROM main, film " .
    " WHERE main.kode_bintang = '$kode_bintang' AND" .
    " film.kode_film = main.kode_film " .
    " ORDER BY film.judul",
    $id_mysql);
?>

<FORM ACTION="hpsbff2.php" METHOD="POST">
<TABLE>
<TR>
<TD>
<?php
  session_register("daftar");
  $daftar = "";
  $i = 0;
  while ($baris = mysql_fetch_row($hasil))
  {
    $i++;
    print("<INPUT TYPE=\"CHECKBOX\" NAME=\"kf[$i]\">");
    print("$baris[1] <BR>\n");
    $daftar[$i] = $baris[0];
  }

  $ada_film = ($i > 0 ? TRUE : FALSE);
  if (! $ada_film)
    print("Tak ada data film");
?>
</TD>
</TR>
</TABLE>

<BR>

<?php
  print("<INPUT TYPE=\"HIDDEN\" ");
  print("NAME=\"kode_bintang\"");
  print(" VALUE=\"$kode_bintang\">");

  if ($ada_film)
    print("<INPUT TYPE=\"SUBMIT\" VALUE=\"Hapus\">");
?>

<INPUT TYPE="BUTTON" VALUE="Ke Sebelum ini"
   ONCLICK="self.history.back();">
</FORM>
</CENTER>
</BODY>
</HTML>

