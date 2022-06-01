<HTML>
<HEAD>
<TITLE>Contoh htmlentities</TITLE>
</HEAD>
<BODY>
  <?php
  $teks1 = "<B> digunakan untuk mengawali teks tebal";
  $teks2 = "dan </B> digunakan untuk mengakhiri teks tebal";

  print("Tidak menggunakan htmlentities :<BR>\n");
  printf("%s <BR>\n", $teks1);
  printf("%s <BR>\n", $teks2);

  print("Menggunakan htmlentities :<BR>\n");
  printf("%s <BR>\n", htmlentities($teks1));
  printf("%s <BR>\n", htmlentities($teks2));

  ?>

</BODY>
</HTML>
