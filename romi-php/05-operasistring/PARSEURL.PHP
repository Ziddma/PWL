<HTML>
<HEAD>
<TITLE>Contoh parse_url</TITLE>
</HEAD>
<BODY>
  <?php
    $teks = "x.php?nama=Amir+Hamzah&alamat=Jl.+Waru+21";
    $hasil = parse_url($teks);

    print("Hasil parse_url :<BR>\n");
    foreach ($hasil as $kunci=>$nilai)
      print("$kunci : $nilai <BR>\n");

    // Parsing variabel dan nilai
    print("<BR>\nVariabel dan nilainya :<BR>\n");
    $var_nilai = strtok($hasil["query"], "&");
    while ($var_nilai)
    {
       printf("%s<BR>\n", urldecode($var_nilai ));
       $var_nilai = strtok("&");
    }


  ?>

</BODY>
</HTML>
