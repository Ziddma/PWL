<HTML>
<HEAD>
<TITLE>Contoh Array</TITLE>
</HEAD>
<BODY>
  <?php
    $kota = array ("Yogya", "Solo",
                   "Bandung", "Bogor");

    $jumlah = count($kota);
    for ($i = 0; $i < $jumlah; $i++)
       print("Elemen berindeks $i: $kota[$i] <BR>\n");
  ?>

</BODY>
</HTML>
