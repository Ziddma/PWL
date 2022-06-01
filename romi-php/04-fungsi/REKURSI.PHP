<HTML>
<HEAD>
<TITLE>Contoh Rekursi</TITLE>
</HEAD>
<BODY>
  <?php
    function faktorial($m)
    {
       if ($m == 0)
         return 1;
       else
         return $m * faktorial($m - 1);
    }

    printf("1! = %d <BR>\n", faktorial(1));
    printf("4! = %d <BR>\n", faktorial(4));
  ?>

</BODY>
</HTML>
