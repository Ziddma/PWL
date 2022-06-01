<HTML>
<HEAD>
<TITLE>Contoh Fungsi dengan Nilai Balik</TITLE>
</HEAD>
<BODY>
  <?php
    function kuadrat($bilangan)
    {
      $tmp = $bilangan * $bilangan;
      return $tmp;
    }

    printf(kuadrat(5));
    print("<BR>\n");
    printf(kuadrat(5.5));
  ?>

</BODY>
</HTML>
