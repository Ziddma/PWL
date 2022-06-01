<HTML>
<HEAD>
<TITLE>Menampilkan Isi Array Menggunakan Pointer</TITLE>
</HEAD>
<BODY>
  <?php
    
    $hari["Sunday"]    = "Minggu";
    $hari["Monday"]    = "Senin";
    $hari["Tuesday"]   = "Selasa";
    $hari["Wednesday"] = "Rabu";
    $hari["Thursday"]  = "Kamis";
    $hari["Friday"]    = "Jumat";
    $hari["Saturday"]  = "Sabtu";

    // Menampilkan smeua elemen
    while (TRUE)
    {
      $hasil = each($hari);
      if ($hasil == FALSE)
        break; // Keluar while

      $indeks = $hasil[0];
      $nilai  = $hasil[1];
      print("Indeks: $indeks -> Nilai: $nilai <BR>\n");
    }
  ?>

</BODY>
</HTML>
