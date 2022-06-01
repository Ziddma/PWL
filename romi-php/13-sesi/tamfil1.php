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
<TITLE>Menambah Data Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<FORM ACTION="tamfil2.php" METHOD="POST">
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
    <TD>Judul Film</TD>
    <TD>
      <?php
        print("<INPUT TYPE=\"TEXT\" NAME=\"judul\"");
        print(" VALUE=\"$judul\">");
      ?>
    </TD>
  </TR>

  <TR>
    <TD>Tahun</TD>
    <TD>
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

</TABLE>

<TABLE BORDER="0">
  <TR>
    <TD>
      <INPUT TYPE="SUBMIT" VALUE="Simpan">
    </TD>
    </FORM>

  <FORM ACTION="tamfil1.php" METHOD="POST">
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

