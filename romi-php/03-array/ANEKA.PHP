<HTML>
<HEAD>
<TITLE>Array dengan Indeks dan Data Berlainan Tipe</TITLE>
</HEAD>
<BODY>
  <?php
    $serbaguna[0] = 50;
    $serbaguna[1] = "ABC";
    $serbaguna["A"] = 70;
    $serbaguna["B"] = "Bagus";

    print($serbaguna[0]);   print("<BR>\n");
    print($serbaguna[1]);   print("<BR>\n");
    print($serbaguna["A"]); print("<BR>\n");
    print($serbaguna["B"]); print("<BR>\n");
  ?>

</BODY>
</HTML>
