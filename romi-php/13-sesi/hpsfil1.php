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

  // Koneksi ke database
  $id_mysql = mysql_pconnect($NAMA_SERVER,
                             $NAMA_USER,
                             $PASSWORD);
  if (! $id_mysql)
    die ("Gagal koneksi ke database server");

  if (! mysql_select_db("binfilm", $id_mysql))
    die ("Gagal memilih database");
   
  $hasil = mysql_query (
    "SELECT judul, tahun " .
    " FROM film "           .
    " WHERE kode_film = '$kode'",
    $id_mysql);

  $baris = mysql_fetch_row($hasil);
  if ($baris == FALSE)
    die("Tak ada data yang memenuhi");

  $judul = $baris[0];
  $tahun = $baris[1];
?>

<HTML>
<HEAD>
<TITLE>Menghapus Data Film</TITLE>
</HEAD>
<BODY>
<CENTER>

<FORM ACTION="hpsfil2.php" METHOD="POST">
<TABLE BORDER="1">
  <TR>
    <TD>Kode</TD>
    <TD>
      <?php
        print($kode);
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Judul</TD>
    <TD>
      <?php
        print("$judul");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Tahun</TD>
    <TD>
      <?php
        print("$tahun");
      ?>
    </TD>
  </TR>
</TABLE>

<BR>
<?php
  print("<INPUT TYPE=\"HIDDEN\" NAME=\"kode\"");
  print(" VALUE=\"$kode\">");
?>
<INPUT TYPE="SUBMIT" VALUE="Hapus">
<INPUT TYPE="BUTTON" VALUE="Ke Sebelum ini"
   ONCLICK="self.history.back();">
</FORM>

</CENTER>
</BODY>
</HTML>

