<HTML>
<HEAD>
<TITLE>Contoh Membaca Isi Direktori</TITLE>
</HEAD>
<BODY>
  <?php
    $dir = opendir(".");
    while ($entri = readdir($dir))
      print("$entri <BR>\n");

    closedir($dir);
  ?>

</BODY>
</HTML>
