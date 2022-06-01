<HTML>
<HEAD>
<TITLE>Contoh Pemakaian Fungsi file</TITLE>
</HEAD>
<BODY>
  <?php
    $website = "http://www.akakom.ac.id/";
    $isi = file($website);
    if ($isi == FALSE)
      printf("Website $website tidak dapat dibuka");

    foreach($isi as $baris)
      printf("%s<BR>\n", htmlentities($baris));
  ?>

</BODY>
</HTML>
