<HTML>
<HEAD>
<TITLE>Contoh lingkup variabel pada include</TITLE>
</HEAD>
<BODY>
  <?php
    $apel   = 1;
    $mangga = 2;

    print("buah.php:<BR>\n");

    print("apel   = $apel<BR>\n");
    print("mangga = $mangga<BR>\n");

    include("ubahbuah.php");

    print("buah.php:<BR>\n");

    print("apel   = $apel<BR>\n");
    print("mangga = $mangga<BR>\n");
  ?>

</BODY>
</HTML>
