<HTML>
<HEAD>
<TITLE>Isi Buku Tamu</TITLE>
</HEAD>
<BODY>
  <?php
     $no_data = 1;
     $pegangan = fopen("BUKUTAMU.DAT", "r");
     while ( ! feof($pegangan) ) 
     {
       $nama    = fgets($pegangan, 255);
       if ($nama == FALSE)
         break;

       $kelamin = trim(fgets($pegangan, 255));
       $email   = trim(fgets($pegangan, 255));
       $kode_minat = trim(fgets($pegangan, 255));

       $ket = "";
       while ( ! feof($pegangan) )
       {
          $tmp = trim(fgets($pegangan, 255));
          if ($tmp == "*-*")
            break;

          $ket .= ($tmp . "<BR>\n");
       }

       $minat = "";
       for ($i = 0; $i < 4; $i++)
       {
          if ( substr($kode_minat,$i,1) == "v" )
            switch ($i)
            {
              case 0 :
                $minat .= "Bonsai<BR>\n";
                break;
              case 1 :
                $minat .= "Tanaman Hias<BR>\n";
                break;
              case 2 :
                $minat .= "Musik Jazz<BR>\n";
                break;
              case 3 :
                $minat .= "Pemrograman<BR>\n";
                break;
            }
       }

       // Tampilkan
       print("<B>Data ke-$no_data :</B> <BR>\n");
       printf("Nama : %s <BR>\n", $nama);
       printf("Kelamin : %s <BR>\n", 
         $kelamin == "L" ? "Pria" : "Wanita" );
       printf("E-mail : %s <BR>\n", $email);
       
       print("<BR>\n");
       if ( ! empty($minat) )
       {
         print("Minat : <BR>\n");
         print("$minat <BR>\n");
       }

       printf("Komentar : %s <BR>\n", $ket);
       print("<BR>\n");

       $no_data++; // Pencacah nomor urut data
     }
  ?>

</BODY>
</HTML>
