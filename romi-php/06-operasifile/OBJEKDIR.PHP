<HTML>
<HEAD>
<TITLE>Contoh Membaca Isi Direktori</TITLE>
</HEAD>
<BODY>
  <?php
    $direktori = dir(".");
    while ($entri = $direktori->read())
      print("$entri <BR>\n");

    $direktori->close($dir);
  ?>

</BODY>
</HTML>
