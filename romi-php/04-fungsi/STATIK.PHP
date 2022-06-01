<HTML>
<HEAD>
<TITLE>Contoh Variabel Statis</TITLE>
</HEAD>
<BODY>
  <?php
    function hitung()
    {
      static $pencacah = 0;
      return ++$pencacah;
    }

    printf("%d <BR>\n", hitung());
    printf("%d <BR>\n", hitung());
    printf("%d <BR>\n", hitung());

  ?>

</BODY>
</HTML>
