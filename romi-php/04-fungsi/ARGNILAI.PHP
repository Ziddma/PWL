<HTML>
<HEAD>
<TITLE>Pelewatan Argumen dengan Nilai</TITLE>
</HEAD>
<BODY>
  <?php
    function tukar($x, $y)
    {
      $tmp = $x;
      $x   = $y;
      $y   = $tmp;
    }

    $a = 10;
    $b = 20;
    print("Sebelum penukaran : ");
    printf("a = %d b = %d <BR>\n", $a, $b);

    tukar($a, $b);

    print("Sesudah penukaran : ");
    printf("a = %d b = %d <BR>\n", $a, $b);

  ?>

</BODY>
</HTML>
