<HTML>
<HEAD>
<TITLE>Pemanggilan Fungsi Secara Dinamis</TITLE>
</HEAD>
<BODY>
  <?php
    function tulis_miring($teks)
    {
      print("<I>$teks</I>");
    }

    function tulis_tebal($teks)
    {
      print("<B>$teks</B>");
    }

    $var_fungsi = "tulis_miring";
    $var_fungsi("Pemrograman");
    print("<BR>\n");

    $var_fungsi = "tulis_tebal";
    $var_fungsi("PHP");

  ?>

</BODY>
</HTML>
