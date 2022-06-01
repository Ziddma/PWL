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
<TITLE>Mengubah Data Bintang Film</TITLE>
</HEAD>
<BODY>
<CENTER>

<FORM ACTION="ubhbin2.php" METHOD="POST">
<TABLE BORDER="1">
  <TR>
    <TD>Kode</TD>
    <TD>
      <?php
        print("$kode");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Nama</TD>
    <TD>
      <?php
        print("<INPUT TYPE=\"TEXT\" NAME=\"nama\"");
        print(" VALUE=\"$nama\">");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Tanggal Lahir</TD>
    <TD>
      <SELECT NAME="tanggal">
        <OPTION VALUE="0" SELECTED >Tanggal

        <?php
          //Bentuk pilihan tanggal 0 sampai dengan 31
          for($i = 1; $i < 32; $i++)
          {
            if ($tanggal == $i)
              $sel = "SELECTED";
            else
              $sel = "";

           print("<OPTION VALUE=\"$i\" $sel>$i");
          }
        ?>

        </OPTION></SELECT>

      <SELECT NAME="bulan">
        <OPTION VALUE="0" SELECTED >Bulan

        <?php
          for($i=1; $i<13; $i++)
          {
            $sel[$i] = "";

            if ($i == $bulan)
              $sel[$i] = "SELECTED";
          }

          print("<OPTION VALUE=\"1\"  $sel[1]>Januari  ");
          print("<OPTION VALUE=\"2\"  $sel[2]>Pebruari ");
          print("<OPTION VALUE=\"3\"  $sel[3]>Maret    ");
          print("<OPTION VALUE=\"4\"  $sel[4]>April    ");
          print("<OPTION VALUE=\"5\"  $sel[5]>Mei      ");
          print("<OPTION VALUE=\"6\"  $sel[6]>Juni     ");
          print("<OPTION VALUE=\"7\"  $sel[7]>Juli     ");
          print("<OPTION VALUE=\"8\"  $sel[8]>Agustus  ");
          print("<OPTION VALUE=\"9\"  $sel[9]>September");
          print("<OPTION VALUE=\"10\" $sel[10]>Oktober ");
          print("<OPTION VALUE=\"11\" $sel[11]>November");
          print("<OPTION VALUE=\"12\" $sel[12]>Desember");
        ?>

        </OPTION></SELECT>

      <SELECT NAME="tahun">
        <OPTION VALUE="0" SELECTED >Tahun
        <?php
          // Bentuk pilihan tahun dari 1900
          // sampai sekarang

          $sekarang = (integer) date("Y");
          for($i = 1900; $i <= $sekarang; $i++)
          {
            if ($i == $tahun)
              $sel = "SELECTED";
            else
              $sel = "";

            print("<OPTION VALUE=\"$i\" $sel>$i");
          }
        ?>

        </OPTION></SELECT>
    </TD>
  </TR>

  <TR>
    <TD>Jenis Kelamin</TD>
    <TD>
      <?php
        $checkedP = "";
        $checkedW = "";
        if ($sex == "W")
          $checkedW = "CHECKED";
        else
          $checkedP = "CHECKED";

        print("<INPUT TYPE=\"RADIO\" NAME=\"sex\"");
        print(" VALUE=\"P\" $checkedP >Pria");
        print("<INPUT TYPE=\"RADIO\" NAME=\"sex\"");
        print(" VALUE=\"W\" $checkedW>Wanita");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Kategori</TD>
    <TD>
      <?php
        $checked_lok  = "";
        $checked_luar = "";
        if ($kateg == "Y")
          $checked_lok = "CHECKED";
        else
          $checked_luar= "CHECKED";

        print("<INPUT TYPE=\"RADIO\" NAME=\"kateg\"");
        print(" VALUE=\"Y\" $checked_lok >Lokal");
        print("<INPUT TYPE=\"RADIO\" NAME=\"kateg\"");
        print(" VALUE=\"T\" $checked_luar>Luar");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Keterangan</TD>
    <TD>
      <?php
        print("<TEXTAREA ROWS=\"5\" COLS=\"40\"");
        print(" NAME=\"ket\">$ket</TEXTAREA>");
      ?>
    </TD>
  </TR>

</TABLE>

<BR>
<?php
  print("<INPUT TYPE=\"HIDDEN\" NAME=\"kode\"");
  print(" VALUE=\"$kode\">");
?>
<INPUT TYPE="SUBMIT" VALUE="Simpan">
<INPUT TYPE="BUTTON" VALUE="Ke Sebelum ini"
   ONCLICK="self.history.back();">
</FORM>

</CENTER>
</BODY>
</HTML>

