<?php
//fungsi biodata

function biodata($nama, $nim,  $kelas, $wali_dosen, $kampus){
    echo "Nama      : $nama <br>";
    echo "NIM       : $nim <br>";
    echo "Kelas     : $kelas <br>";
    echo "Wali Dosen: $wali_dosen <br>";
    echo "Kampus    : $kampus<br>";
}
    biodata("Zidni Ilma","A11.2021.13932","A11.4224","Eko Hari Rachmawanto","Universitas Dian Nuswantoro");

//fungsi luas dan keliling segitiga

function luas_segitiga($alas,$tinggi){
    return 0.5*$tinggi*$alas;
}
function keliling_segitiga($alas,$tinggi,$sisi){
    return $alas*$tinggi+$sisi;
}
echo "<br><br>";
    //soal luas segitiga

    echo "Luas segitiga dengan alas  20 dan tinggi  41 = ";
    echo luas_segitiga(20,41)."<br>";
    echo "Luas segitiga dengan alas  51 dan tinggi  23 = ";
    echo luas_segitiga(51,23)."<br><br>";
    //soal keliling segitiga
    echo "Keliling segitiga dengan alas  12 dan tinggi  41 dan sisi miring  82 = ";
    echo keliling_segitiga(12,41,82)."<br>";
    echo "Keliling segitiga dengan alas  32 dan tinggi  51 dan sisi miring  59 = ";
    echo keliling_segitiga(32,51,59)."<br><br>";

//fungsi luas dan keliling lingkaran

function luas_lingkaran($jari){
    return 3.14*$jari*$jari;
}
function keliling_lingkaran($jari){
    return 3.14*($jari+$jari);
}
    //soal luas lingkaran
    echo "Luas lingkaran dengan jari2 12  = ";
    echo luas_lingkaran(12)."<br>";
    echo "Luas lingkaran dengan jari2 15  = ";
    echo luas_lingkaran(15)."<br>";
    echo "Luas lingkaran dengan jari2 32  = ";
    echo luas_lingkaran(32)."<br><br>";

    //soal keliling lingkaran
    echo "Keliling lingkaran dengan jari2 61  = ";
    echo keliling_lingkaran(61)."<br>";
    echo "Keliling lingkaran dengan jari2 97  = ";
    echo keliling_lingkaran(97)."<br>";
    echo "Keliling lingkaran dengan jari2 19  = ";
    echo keliling_lingkaran(19)."<br><br>";

//fungsi nilai A,B,C,D,E

function index_nilai($nilai){
    if($nilai <= 100 & $nilai >=85)
        echo "Predikat anda = A<br>";
    else if ($nilai >= 70 & $nilai <85)
        echo "Predikat anda = B<br>";
    else if ($nilai >= 60 & $nilai <70)
        echo "Predikat anda = C<br>";
    else if ($nilai >= 50 & $nilai <60)
        echo "Predikat anda = D<br>";
    else if ($nilai <50)
        echo "Predikat anda = E<br>";
    else{
        echo "Anda telah meninggal";
    }

}

//Contoh predikat
index_nilai(71);
index_nilai(51);
index_nilai(90);
index_nilai(60);
index_nilai(84);


?>