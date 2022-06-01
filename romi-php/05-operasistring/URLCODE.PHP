<HTML>
<HEAD>
<TITLE>Contoh urldecode dan urlencode</TITLE>
</HEAD>
<BODY>
  <?php
    $teks = "salam.php?pemakai=Abdul+Kadir";

    $decode = urldecode($teks);
    print("Hasil urldecode: $decode <BR>\n");

    $encode = urlencode($decode);
    print("Hasil urlencode: $encode <BR>\n");

    print("Contoh urlencode pada pembuatan link:<BR>\n");
    //$nama = urlencode("Tri Setyawati & Kusumawardani");
    $nama = "Tri Setyawati & Kusumawardani";
    print("<A HREF=\"Salam.php?nama_pemakai=$nama\">salam.php</A>");

  ?>

</BODY>
</HTML>
