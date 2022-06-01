<HTML>
<HEAD>
<TITLE>Contoh Fungsi</TITLE>
</HEAD>
<BODY>
  <?php
    function tulistbl($teks)
    {
      print("<B>$teks</B><BR>\n"); 
    }

    tulistbl("Perhatian !");
    tulistbl("Baris ini dicetak tebal");
    print("Baris ini tidak tebal<BR>\n");
  ?>

</BODY>
</HTML>
