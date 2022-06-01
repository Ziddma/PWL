<HTML>
<HEAD>
<TITLE>Contoh explode dan implode</TITLE>
</HEAD>
<BODY>
  <?php
    $teks = "Saya belajar PHP lho";
    $hasil = explode(" ", $teks, 3);
    print("Hasil explode<BR>\n");
    while ( list($indeks, $nilai) = each($hasil) )
    {
       print("[$indeks] -> $nilai <BR>\n");
    }

    // di-implode
    $gab = implode("-", $hasil);
    print("Hasil implode<BR>\n");
    print("$gab");


  ?>

</BODY>
</HTML>
