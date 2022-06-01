<?php

$nama_folder1 = "Zidni";
$nama_folder2 = "Ilma";
$nama_folder3 = "Muhammad";

if ($nama_folder1){
    mkdir($nama_folder1);
    echo "Folder 1 telah dibuat";
    echo "<br>";
    if ($nama_folder1) {

        $nama = "zidni/nama.txt";
        $alamat = "zidni/alamat.txt";
        $desc = "zidni/deskripsi.txt";

        $file1 = fopen($nama, "w");
        $file2 = fopen($alamat,"w");
        $file3 = fopen($desc,"w");

        fwrite($file1, "Nama : Zidni");
        fwrite($file2, "Alamat : Semarang");
        fwrite($file3, "Seorang mahasiswa");

        }
    else{
        "Tidak dapat dibuat";
    }
    

    }
if ($nama_folder2){
    mkdir($nama_folder2);
    echo "Folder 2 telah dibuat";
    echo "<br>";
    if ($nama_folder2) {

        $nama = "Ilma/nama.txt";
        $alamat = "Ilma/alamat.txt";
        $desc = "Ilma/deskripsi.txt";

        $file1 = fopen($nama, "w");
        $file2 = fopen($alamat,"w");
        $file3 = fopen($desc,"w");

        fwrite($file1, "Nama : Ilma");
        fwrite($file2, "Alamat : Kendal");
        fwrite($file3, "Seorang Kuli");

        }
    else{
        "Tidak dapat dibuat";
    }
    

    }

if ($nama_folder3){
    mkdir($nama_folder3);
    echo "Folder 3 telah dibuat";
    echo "<br>";
    if ($nama_folder3) {

        $nama = "Muhammad/nama.txt";
        $alamat = "Muhammad/alamat.txt";
        $desc = "Muhammad/deskripsi.txt";

        $file1 = fopen($nama, "w");
        $file2 = fopen($alamat,"w");
        $file3 = fopen($desc,"w");

        fwrite($file1, "Nama : Muhammad");
        fwrite($file2, "Alamat : New zealand");
        fwrite($file3, "Seorang sugar daddy");

        }
    else{
        "Tidak dapat dibuat";
    }
    

    }



    
?>