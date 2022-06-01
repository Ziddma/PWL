<HTML>
<HEAD>
<TITLE>Fungsi Date dengan 2 Argumen</TITLE>
</HEAD>
<BODY>
  <?php
    $sekarang = time();
    $nanti    = $sekarang + 24 * 60 * 60;
    print("Tanggal sekarang : " .
          date("d/m/Y", $sekarang) .
          "<BR>\n");

    print("1 hari berikutnya : " .
          date("d/m/Y", $nanti));

  ?>
</BODY>
</HTML>
