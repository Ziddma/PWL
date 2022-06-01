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
    "SELECT nama, tgl_lahir, " .
    "lokal, sex, keterangan "  .
    " FROM bintang "           .
    " WHERE kode_bintang = '$kode'",
    $id_mysql);

  $baris = mysql_fetch_row($hasil);
  if ($baris == FALSE)
    die("Tak ada data yang memenuhi");

  $nama    = $baris[0];
  $tahun   = substr($baris[1], 0, 4);
  $bulan   = substr($baris[1], 5, 2);
  $tanggal = substr($baris[1], 8, 2);
  $kateg   = $baris[2];
  $sex     = $baris[3];
  $ket     = $baris[4];

?>

<HTML>
<HEAD>
<TITLE>Menghapus Data Bintang Film</TITLE>
</HEAD>
<BODY>
<CENTER>

<FORM ACTION="hpsbin2.php" METHOD="POST">
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
    <TD>Nama</TD>
    <TD>
      <?php
        print("$nama");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Tanggal Lahir</TD>
    <TD>
      <?php
        print("$tanggal/$bulan/$tahun");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Jenis Kelamin</TD>
    <TD>
      <?php
        if ($sex == "W")
          print("Wanita");
        else
          print("Pria");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Kategori</TD>
    <TD>
      <?php
        if ($kateg == "Y")
          print("Bintang film lokal");
        else
          print("Bintang film luar");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Keterangan</TD>
    <TD>
      <?php
        print("$ket");
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

