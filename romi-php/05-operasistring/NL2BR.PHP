<HTML>
<HEAD>
<TITLE>Contoh nl2br</TITLE>
</HEAD>
<BODY>
  <?php
  $teks1 = "Baris pertama\n";
  $teks2 = "Baris kedua\n";

  print("Tidak menggunakan nl2br :<BR>\n");
  print($teks1);
  print($teks2);
  
  print("Menggunakan nl2br :<BR>\n");
  print(nl2br($teks1));
  print(nl2br($teks2));

  ?>

</BODY>
</HTML>
