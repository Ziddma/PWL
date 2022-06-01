<?php
  include "tanggal2.inc";

  $tgl1 = new kelas_tanggal;

  printf("Tanggal %d/%d/%d <BR>\n",
         $tgl1->tanggal,
         $tgl1->bulan,
         $tgl1->tahun);

  $tgl2 = new kelas_tanggal(24, 6, 1965);
  printf("Tanggal %d/%d/%d <BR>\n",
         $tgl2->tanggal,
         $tgl2->bulan,
         $tgl2->tahun);

?>
