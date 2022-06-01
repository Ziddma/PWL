<HTML>
<HEAD>
<TITLE>Contoh include via for</TITLE>
</HEAD>
<BODY>
  <?php
    $berkas = array("satu.php",
                    "dua.php",
                    "tiga.php");

    print("Tes 123.php<BR>\n");

    for($i = 0; $i < 3; $i++)
    {
      include($berkas[$i]);
    }

    print("Selesai<BR>\n");

  ?>

</BODY>
</HTML>
