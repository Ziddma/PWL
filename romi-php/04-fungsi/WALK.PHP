<HTML>
<HEAD>
<TITLE>Contoh array_walk</TITLE>
</HEAD>
<BODY>
  <?php
    $bahasa = array ( "Pascal", "C", "C++" );

    function tampil_x($item, $kunci)
    {
      echo "$kunci -> $item<BR>\n";
    }

    function tampil_y($item, $kunci, $tambahan)
    {
      echo "$kunci -> $tambahan $item<BR>\n";
    }

    array_walk ($bahasa, "tampil_x");
    print("*<BR>\n");
    array_walk ($bahasa, "tampil_y", "bahasa");

  ?>

</BODY>
</HTML>
