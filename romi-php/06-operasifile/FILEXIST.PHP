<HTML>
<HEAD>
<TITLE>Contoh file_exists</TITLE>
</HEAD>
<BODY>
  <?php
    $skrip = "bacatamu.php";
    if ( file_exists($skrip) )
    {
      $berkas = fopen($skrip, "r");
      while ( ! feof($berkas) )
      {
        $isi_baris = trim(fgets($berkas, 255));
        printf("%s<BR>\n", htmlentities($isi_baris));
      }
    }
    else
      printf("Berkas $skrip tidak ditemukan");

  ?>

  ?>

</BODY>
</HTML>
