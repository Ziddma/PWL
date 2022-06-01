<HTML>
<HEAD>
<TITLE>Mengambil Data Secara Random</TITLE>
</HEAD>
<BODY>
  <?php
    $peserta = array ("Andi", "Siti", "Jatmiko" ,"Edi");

    srand((double) microtime()* 10000000);
    $kunci_random = array_rand($peserta, 2);

    print("Nilai indeks random: <BR>\n");
    print("$kunci_random[0] <BR>\n");
    print("$kunci_random[1] <BR>\n");

    printf("Pemenang pertama : %s<BR>\n",
          $peserta[$kunci_random[0]]);

    printf("Pemenang kedua : %s<BR>\n",
          $peserta[$kunci_random[1]]);

  ?>

</BODY>
</HTML>
