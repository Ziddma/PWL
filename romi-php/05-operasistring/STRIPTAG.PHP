<HTML>
<HEAD>
<TITLE>Contoh strip_tags</TITLE>
</HEAD>
<BODY>
  <?php
  $teks = "<B>Tebal</B> <?php ?> <I>Miring</I>";

  print("Tanpa strip_tags : <BR>\n");
  print($teks);

  print("<BR>\n");
  print("Menggunakan strip_tags :<BR>\n");
  print(strip_tags($teks));

  ?>

</BODY>
</HTML>
