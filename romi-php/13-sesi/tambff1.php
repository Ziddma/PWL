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
<TITLE>Menambah Bintang Film & Film</TITLE>
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
  
  $hasil = mysql_query (
    "SELECT kode_film, judul " .
    " FROM film " .
    " ORDER BY judul",
    $id_mysql);
?>

<FORM ACTION="tambff2.php" METHOD="POST">
<TABLE BORDER="0">
  <TR>
    <TD>Judul Film :</TD>
    <TD>
      <?php
        session_register("daf_film");
        $daf_film = "";
        $i = 0;
        while ($baris = mysql_fetch_row($hasil))
        {
          $i++;
          print("<INPUT TYPE=\"CHECKBOX\" NAME=\"kf[$i]\">");
          print("$baris[1]");
          $daf_film[$i] = $baris[0];
        }
      ?>
    </TD>
  </TR>
</TABLE>

<BR>

<?php
  print("<INPUT TYPE=\"HIDDEN\" ");
  print("NAME=\"kode_bintang\"");
  print(" VALUE=\"$kode_bintang\">");
?>

<INPUT TYPE="SUBMIT" VALUE="Simpan">
<INPUT TYPE="BUTTON" VALUE="Ke Sebelum ini"
   ONCLICK="self.history.back();">
</FORM>
</CENTER>
</BODY>
</HTML>

