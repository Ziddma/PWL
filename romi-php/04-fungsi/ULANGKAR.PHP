<HTML>
<HEAD>
<TITLE>Contoh Fungsi dengan Dua Argumen</TITLE>
</HEAD>
<BODY>
  <?php
    function tuliskar($teks, $jumlah)
    {
      for ($i = 1; $i <= $jumlah; $i++)
        print($teks);
    }

    tuliskar("P", 5);
    print("<BR>\n");
    tuliskar("+", 10);
  ?>

</BODY>
</HTML>
