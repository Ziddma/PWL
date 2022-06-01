<HTML>
<HEAD>
<TITLE>Operasi Pointer Internal pada Array</TITLE>
</HEAD>
<BODY>
  <?php
    $data["A"] = "Sangat Baik";
    $data["B"] = "Baik";
    $data["C"] = "Cukup";
    $data["F"] = "Gagal";

    // Contoh penggunaan current dan key
    print("<B>Setelah pendefinisian array </B><BR>\n");

    $indeks = key($data);
    $nilai  = current($data);
    print("Indeks sekarang       : $indeks <BR>\n");
    print("Nilai elemen sekarang : $nilai <BR>\n");

    // Contoh penggunaan end
    $nilai = end($data); // Ke elemen terakhir
    $indeks = key($data);

    print("<B>Setelah pemanggilan end </B><BR>\n");
    print("Indeks sekarang       : $indeks <BR>\n");
    print("Nilai elemen sekarang : $nilai <BR>\n");

    // Contoh penggunaan prev
    $nilai = prev($data); // Ke elemen sebelumnya
    $indeks = key($data);

    print("<B>Setelah pemanggilan prev </B><BR>\n");
    print("Indeks sekarang       : $indeks <BR>\n");
    print("Nilai elemen sekarang : $nilai <BR>\n");

    // Contoh penggunaan reset
    $nilai = reset($data); // Ke elemen pertama
    $indeks = key($data);

    print("<B>Setelah pemanggilan reset </B><BR>\n");
    print("Indeks sekarang       : $indeks <BR>\n");
    print("Nilai elemen sekarang : $nilai <BR>\n");

    // Contoh penggunaan next
    $nilai = next($data); // Ke elemen berikutnya
    $indeks = key($data);

    print("<B>Setelah pemanggilan next </B><BR>\n");
    print("Indeks sekarang       : $indeks <BR>\n");
    print("Nilai elemen sekarang : $nilai <BR>\n");

  ?>

</BODY>
</HTML>
