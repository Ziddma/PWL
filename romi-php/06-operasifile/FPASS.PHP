<HTML>
<HEAD>
<TITLE>Contoh fpassthru</TITLE>
</HEAD>
<BODY>
  <?php
    $website = "http://www.akakom.ac.id";
    $berkas = fopen($website, "r");
    if ($berkas)
      fpassthru($berkas);
    else
      print("Berkas $website tidak dapat dibuka");
  ?>

</BODY>
</HTML>
