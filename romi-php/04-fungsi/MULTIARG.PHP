<HTML>
<HEAD>
<TITLE>Penanganan Jumlah Argumen Tidak Pasti</TITLE>
</HEAD>
<BODY>
  <?php
    function tesmulti()
    {
       $jum_arg = func_num_args();
       if ($jum_arg == 0)
         return 0;

       // Ambil argumen dengan func_get_arg
       print("Melalui func_get_arg: <BR>\n");
       for ($i = 0; $i < $jum_arg; $i++)
       {
         print("Nilai argumen ke-$i : ");
         print(func_get_arg($i));
         print("<BR>\n");
       }

       // Ambil argumen dengan func_get_args
       print("Melalui func_get_args: <BR>\n");
       $argumen = func_get_args();
       foreach ($argumen as $kunci => $nilai)
          print("Argumen ke-$i : $nilai <BR>\n");
    }

    print(tesmulti(1, 2, 5, 9));
  ?>

</BODY>
</HTML>
