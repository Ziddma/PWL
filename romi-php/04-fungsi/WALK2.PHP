<HTML>
<HEAD>
<TITLE>Contoh array_walk</TITLE>
</HEAD>
<BODY>
  <?php
    $bahasa = array ( "p"=>"Pascal", "c"=>"C", "+"=>"C++" );

    function tampil($item, $kunci)
    {
      echo "$kunci -> $item<BR>\n";
    }

    function ubah(&$item, $kunci, $tambahan)
    {
      $item = "$tambahan $item";
    }
    print("Mula-mula:<BR>\n");
    array_walk ($bahasa, "tampil");

    array_walk ($bahasa, "ubah", "bahasa");

    print("Setelah diubah oleh array_walk<BR>\n");
    array_walk ($bahasa, "tampil");
  ?>

</BODY>
</HTML>
