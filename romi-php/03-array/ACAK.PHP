<HTML>
<HEAD>
<TITLE>Mengacak Data</TITLE>
</HEAD>
<BODY>
  <?php
    $data = range(1, 10);
    shuffle($data);

    while ( list($indeks, $nilai) = each($data) )
    {
       print("[$indeks] -> $nilai <BR>\n");
    }

    print("<BR>\n");


  ?>

</BODY>
</HTML>
