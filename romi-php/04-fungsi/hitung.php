<HTML>
<HEAD>
<TITLE>Contoh Variabel Non-Statis</TITLE>
</HEAD>
<BODY>
  <?php
    function hitung()
    {
      $pencacah = 0;
      return ++$pencacah;
    }

    printf("%d <BR>\n", hitung());
    printf("%d <BR>\n", hitung());
    printf("%d <BR>\n", hitung());

  ?>

</BODY>
</HTML>



