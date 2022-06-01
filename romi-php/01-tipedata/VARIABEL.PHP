<HTML>
<HEAD>
<TITLE>Contoh Penaikan Isi variabel</TITLE>
</HEAD>
<BODY>

  <?php
    $gaji = 2000000;
    printf("Gaji semula = %d <BR>\n", $gaji);

    $gaji = 1.5 * $gaji;
    printf("Gaji sekarang = %d <BR>\n", $gaji);
  ?>


</BODY>
</HTML>