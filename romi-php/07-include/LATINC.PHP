<HTML>
<HEAD>
<TITLE>Contoh meng-include</TITLE>
</HEAD>
<BODY>
  <?php
    print("Tes include<BR>\n");

    include("header.php");

    print("Setelah include pertama<BR>\n");

    include("header.php");

    print("Setelah include kedua<BR>\n");
  ?>

</BODY>
</HTML>
