<HTML>
<HEAD>
<TITLE>Contoh ereg_replace dan eregi_repl</TITLE>
</HEAD>
<BODY>
  <?php
    $kalimat = "Saya pergi ke teman saya";
    $hasila  = ereg_replace("saya", "kami", $kalimat);
    $hasilb  = eregi_replace("saya", "kami", $kalimat);

    print("Asli  : $kalimat <BR>\n");
    print("Hasil ereg_replace  : $hasila <BR>\n");
    print("Hasil eregi_replace : $hasilb <BR>\n");
  ?>

</BODY>
</HTML>
