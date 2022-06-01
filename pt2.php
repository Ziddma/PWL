<html>
    <head>

</head> 
    <body>
        <?php
            $angka1 = 20;
            $angka2 = 10;
            $hasil = $angka1 * $angka2;

            // echo "halo ganteng".$angka1." dengan ".$angka2." hasilnya ".$hasil;
            // echo "<b>Ganti Baris<b>";

            if($angka1 < 10)
                echo "Angka kurang dari 10";
            else if ($angka2 > 10)
                echo "Angka lebih dari 10";
            else{
                echo"Angka 10 atau error";
            }

            for($x=0; $x<10; $x++){
                echo $x." ";
            }
        ?>

        </body>
    </html>