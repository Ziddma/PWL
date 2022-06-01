  <?php
  if (isset($tahun))
    if ( ($tanggal == 0) OR
         ($bulan == 0) OR
         ($tahun == 0) )
      print("Tanggal, bulan, dan tahun harap diisi");
    else
      if (checkdate($bulan, $tanggal, $tahun))
        print("Ok. Anda lahir pada $tanggal/$bulan/$tahun");
      else
        print("$tanggal/$bulan/$tahun TIDAK VALID");
  ?>
