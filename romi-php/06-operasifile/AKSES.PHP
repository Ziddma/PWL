<HTML>
<HEAD>
<TITLE>Contoh Penggunaan fileatime</TITLE>
</HEAD>
<BODY>
  <?php
    $berkas = "akses.php";
    $waktu_akses = fileatime($berkas);
    printf("Terakhir kali diakses : %s",
      date("d F Y, h:m", $waktu_akses));
  ?>

</BODY>
</HTML>
