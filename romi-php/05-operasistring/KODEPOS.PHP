<HTML>
<HEAD>
<TITLE>Contoh Pemeriksaan Kode Pos</TITLE>
</HEAD>
<BODY>

  <FORM>
    Kode Pos: 
    <INPUT TYPE=TEXT NAME=kode_pos><BR><BR>
    <INPUT TYPE=SUBMIT VALUE="Cek">
  </FORM>

  <?php
  if (isset($kode_pos))
    if (empty($kode_pos))
      print("Harap mengisikan kode pos <BR>\n");
    else
    {
      // Cek kode pos
      if (ereg("^[1-9][0-9]{4}$", $kode_pos))
        print("Kode pos $kode_pos valid <BR>\n");
      else
        print("Kode pos $kode_pos tidak valid <BR>\n");
    }
  ?>

</BODY>
</HTML>
