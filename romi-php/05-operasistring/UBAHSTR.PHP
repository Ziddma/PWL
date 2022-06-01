<HTML>
<HEAD>
<TITLE>Contoh Konversi Huruf Kecil-Kapital</TITLE>
</HEAD>
<BODY>
  <?php
    $kalimat = "pemrograman PHP";

    printf("Hasil strtoupper: %s<BR>\n",
           strtoupper($kalimat));

    printf("Hasil strtolower: %s<BR>\n",
           strtolower($kalimat));

    printf("Hasil ucfirst: %s<BR>\n",
           ucfirst($kalimat));

    printf("Hasil ucwords: %s<BR>\n",
           ucwords($kalimat));

    printf("Aslinya : $kalimat<BR>\n");

  ?>

</BODY>
</HTML>
