<HTML>
<HEAD>
<TITLE>Pengurutan Data Secara Alamiah</TITLE>
</HEAD>
<BODY>
  <?php
    // Data array

    $buah1[0] = "11 Nanas";
    $buah1[1] = "1 Nanas";
    $buah1[2] = "2 Nanas";
    $buah1[3] = "12 Nanas";

    print("Data Asli : <BR>\n");
    while ( list($indeks, $nilai) = each($buah1) )
    {
       print("$nilai <BR>\n");
    }

    print("<BR>\n");

    // Pengurutan dengan sort
    $buah2 = $buah1;
    sort($buah2);

    print("Hasil sort : <BR>\n");
    while ( list($indeks, $nilai) = each($buah2) )
    {
       print("$nilai <BR>\n");
    }

    print("<BR>\n");

    // Pengurutan dengan natsort
    $buah2 = $buah1;
    natsort($buah2);

    print("Hasil natsort : <BR>\n");
    while ( list($indeks, $nilai) = each($buah2) )
    {
       print("$nilai <BR>\n");
    }

    print("<BR>\n");

  ?>

</BODY>
</HTML>
