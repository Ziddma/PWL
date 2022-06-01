<HTML>
<HEAD>
<TITLE>Contoh Pengulangan dengan foreach</TITLE>
</HEAD>
<BODY>
  <?php
    $peserta = array ("Andi", "Siti", "Jatmiko" ,"Edi");
    foreach ($peserta as $indeks => $nilai)
      print("$indeks -> $nilai <BR>\n");

  ?>

</BODY>
</HTML>
