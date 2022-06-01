<HTML>
<HEAD>
<TITLE>Contoh Penggunaan strtok</TITLE>
</HEAD>
<BODY>
  <?php
    $kalimat = "saya pergi ke teman-saya";
    $kata = strtok($kalimat, " -");
    while ($kata)
    {
       print("Kata = $kata <BR>\n");
       $kata = strtok(" -");
    }
  ?>

</BODY>
</HTML>
