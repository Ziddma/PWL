<HTML>
<HEAD>
<TITLE>Contoh str_replace</TITLE>
</HEAD>
<BODY>
  <?php
    $kalimat = "saya pergi ke teman saya";
    $hasil   = str_replace("saya", "kami", $kalimat);

    print("Asli  : $kalimat <BR>\n");
    print("Hasil : $hasil <BR>\n");
  ?>

</BODY>
</HTML>
