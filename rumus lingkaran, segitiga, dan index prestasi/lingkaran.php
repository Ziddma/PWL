<!DOCTYPE html>
<html>
 <head>
  <title>rumus</title>
 </head>

 <body>

<?php

//Kamus
    $alas_segitiga = 10;
    $tinggi_segitiga = 7;
    $sisimiring = 14;
    $phi = 3.14;
    $diameter = 14;
    $jari = 7;
    $luas_segitiga = 0.5 * ($alas_segitiga * $tinggi_segitiga);
    $keliling_segitiga = $alas_segitiga+$tinggi_segitiga+$sisimiring;
    $luas_lingkaran = $phi*$jari*$jari;
    $keliling_lingkaran = $phi*$diameter;
    $nilai = 85;

    //luas dan keliling lingkaran
    echo "Luas segitiga <br> 1/2 * alas * tinggi <br>";
    echo " 1/2 * $alas_segitiga * $tinggi_segitiga = $luas_segitiga";
    echo "<br><br>>";

    echo "keliling segitiga <br> alas * tinggi * sisi miring <br>";
    echo "$alas_segitiga * $tinggi_segitiga * $sisimiring = $keliling_segitiga";
    echo "<br><br>";
   
    //Luas dan keliling lingkaran
    echo "Luas lingkaran <br> phi * r * r <br>";
    echo "$phi * $jari * $jari = $luas_lingkaran";
    echo "<br><br>";

    echo "Keliling lingkaran <br> 2 * phi * r <br>";
    echo "2 * $phi * $jari = $keliling_lingkaran";
    echo "<br><br>";

    //penerapan kondisi untuk penentuan nilai A, B, C, D, E, dari 1 variabel
    
    if($nilai <= 100 & $nilai >=85){
        echo "Nilai anda A";}
    else if ($nilai >=70){
        echo "NIlai anda B";}
    else if($nilai >=60){
        echo "Nilai anda C";}
    else if($nilai <=50){
        echo "Nilai anda D";}
    else if($nilai <= 0){
        echo "Nilai anda E";}

?>

</body>
</html>