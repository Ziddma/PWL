<HTML>
<HEAD>
<TITLE>Menciptakan Array Berisi Nilai Urut</TITLE>
</HEAD>
<BODY>
  <?php
    $urut = range(2, 10);

    while ( list($indeks, $nilai) = each($urut) )
    {
       print("[$indeks] -> $nilai <BR>\n");
    }

    print("<BR>\n");


  ?>

</BODY>
</HTML>
