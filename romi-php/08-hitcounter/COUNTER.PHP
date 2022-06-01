<HTML>
<HEAD>
<TITLE>Contoh Counter</TITLE>
</HEAD>
<BODY>

  <?php
    $nama_berkas = "COUNTER.DAT";
    if (file_exists($nama_berkas))
    {
      $berkas   = fopen($nama_berkas, "r");
      $pencacah = (integer) trim(fgets($berkas, 255));
      $pencacah++;
      fclose($berkas);
    }
    else
      $pencacah = 1;

    // Simpan pencacah
    $berkas   = fopen($nama_berkas, "w");
    fputs($berkas, $pencacah);
    fclose($berkas);

    // Tulis ke halaman web
    print("Anda adalah pengunjung ke-$pencacah <BR>\n");
  ?>

</BODY>
</HTML>
