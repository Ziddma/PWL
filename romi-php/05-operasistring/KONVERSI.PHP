<HTML>
<HEAD>
<TITLE>Fungsi untuk Meniru strtoupper</TITLE>
</HEAD>
<BODY>
  <?php
    function kapital($teks)
    {
      $hasil   = ""; // String kosong

      $panjang = strlen($teks);
      for ($i = 0; $i < $panjang; $i++)
      {
         $karakter = substr($teks, $i, 1);
         if ( ($karakter >= "a") and
              ($karakter <= "z") )
           $karakter = chr( ord($karakter) - 32 );

         $hasil .= $karakter;
      }

      return $hasil;
    }

    $kalimat = "Pemrograman PHP";
    printf("%s <BR>\n", kapital($kalimat));

  ?>

</BODY>
</HTML>
