<HTML>
<HEAD>
<TITLE>Pengujian FALSE pada strpos</TITLE>
</HEAD>
<BODY>
  <?php
    $karakter = "a";
    $st = "akhir";

    print("Menggunakan = = = <BR>\n");
    $posisi = strpos($st, $karakter);
    if ($posisi === FALSE)
       print("$karakter tak ada pada $st <BR>\n");
    else
       print("a ada pada posisi $posisi <BR>\n");

    print("Menggunakan = = <BR>\n");
    $posisi = strpos($st, $karakter);
    if ($posisi == FALSE)
       print("$karakter tak ada pada $st <BR>\n");
    else
       print("a ada pada posisi $posisi <BR>\n");
  ?>

</BODY>
</HTML>
