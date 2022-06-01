<HTML>
<HEAD>
<TITLE>Contoh crc32</TITLE>
</HEAD>
<BODY>
  <?php
    $hasil = crc32("abcde");
    print("$hasil <BR>\n");

    $hasil = crc32("abcde");
    print("$hasil <BR>\n");

    $hasil = crc32("abcdE");
    print("$hasil  <BR> \n");
  ?>

</BODY>
</HTML>
