<HTML>
<HEAD>
<TITLE>Pengurutan Data Secara Alamiah</TITLE>
</HEAD>
<BODY>
  <?php
    // Data array semula

    $tumpukan[0] = "A";
    $tumpukan[1] = "B";
    $tumpukan[2] = "A";
    $tumpukan[3] = "X";

    $unik = array_unique($tumpukan);
    print("Hasil setelah array_unique : <BR>\n");
    while ( list($indeks, $nilai) = each($unik) )
    {
       print("$nilai <BR>\n");
    }

    print("<BR>\n");


  ?>

</BODY>
</HTML>
