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
<TITLE>Menambah Data Bintang Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<FORM ACTION="tambin2.php" METHOD="POST">
<TABLE BORDER="1">
  <TR>
    <TD>Kode</TD>
    <TD>
      <?php
        print("<INPUT TYPE=\"TEXT\" NAME=\"kode\"");
        print(" VALUE=\"$kode\" MAXLENGTH=\"5\">");
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

<TABLE BORDER="0">
  <TR>
    <TD>
      <INPUT TYPE="SUBMIT" VALUE="Simpan">
    </TD>
    </FORM>

  <FORM ACTION="tambin1.php" METHOD="POST">
    <TD>
      <INPUT TYPE="SUBMIT" VALUE="Reset">
    </TD>
  </FORM>

  </TR>
</TABLE>

<?php
  print("$msg<BR>\n");
?>

</CENTER>
</BODY>
</HTML>

