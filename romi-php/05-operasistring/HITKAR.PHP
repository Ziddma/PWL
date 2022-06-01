<HTML>
<HEAD>
<TITLE>Penggunaan count_chars</TITLE>
</HEAD>
<BODY>
  <?php
    $kalimat   = "Selamat belajar PHP";
    $frekuensi = count_chars($kalimat, 1);
    var_dump($frekuensi);

    // Tampilkan karakter dan frekuensinya
    print("<BR>\nJumlah elemen array : " .
          count($frekuensi) . "<BR>\n");
    while ( list($kunci, $nilai) = each($frekuensi) )
    {
      if ($kunci <= 32)
         printf("Jumlah karakter ber-ASCII %d = %d <BR>\n",
                $kunci, $nilai);
      else
         printf("Jumlah karakter %c = %d <BR>\n",
                $kunci, $nilai);
    }     
  ?>

</BODY>
</HTML>
