<HTML>
<HEAD>
<TITLE>Pengurutan Data Secara Alamiah</TITLE>
</HEAD>
<BODY>
  <?php
    // Data array semula

    $tumpukan[0] = "A";
    $tumpukan[1] = "B";
    $tumpukan[2] = "D";

    // Tambah dua buah elemen di akhir array
    $jum = array_push($tumpukan, "E", "F");

    print("Hasil setelah array_push : <BR>\n");
    while ( list($indeks, $nilai) = each($tumpukan) )
    {
       print("$nilai ");
    }

    print("<BR>\n");

    print("Jumlah elemen = $jum <BR>\n");

    // Hapus elemen terakhir
    $nilai = array_pop($tumpukan);

    print("Data yang dihapus: $nilai<BR>\n");

    // Tambah dua buah elemen di awal array
    $jum = array_unshift($tumpukan, "X", "Z");

    print("Hasil setelah array_unshift : <BR>\n");
    while ( list($indeks, $nilai) = each($tumpukan) )
    {
       print("$nilai ");
    }

    print("<BR>\n");

    print("Jumlah elemen = $jum <BR>\n");

    // Hapus elemen pertama
    $nilai = array_shift($tumpukan);

    print("Data yang dihapus: $nilai<BR>\n");

    // Tampilkan isi array
    print("Isi tumpukan sekarang : <BR>\n");
    while ( list($indeks, $nilai) = each($tumpukan) )
    {
       print("$nilai ");
    }

    print("<BR>\n");

  ?>

</BODY>
</HTML>
