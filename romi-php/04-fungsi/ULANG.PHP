<HTML>
<HEAD>
<TITLE>Contoh Nilai Argumen Bawaan</TITLE>
</HEAD>
<BODY>
  <?php
    function tuliskar($teks, $jumlah = 1)
    {
      for ($i = 1; $i <= $jumlah; $i++)
        print($teks);
    }

    tuliskar("P", 5);
    print("<BR>\n");
    tuliskar("+");
    print("<BR>\n");
    tuliskar("+", 1);
  ?>

</BODY>
</HTML>
