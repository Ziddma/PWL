<?php
  include "tanggal2.inc";

  $tgl_bersejarah[1] =
    new kelas_tanggal(17, 8, 1945);

  $tgl = new kelas_tanggal;
  $tgl_bersejarah[2] = $tgl;

  printf("Tanggal %d/%d/%d <BR>\n",
         $tgl_bersejarah[1]->tanggal,
         $tgl_bersejarah[1]->bulan,
         $tgl_bersejarah[1]->tahun);

  printf("Tanggal %d/%d/%d <BR>\n",
         $tgl_bersejarah[2]->tanggal,
         $tgl_bersejarah[2]->bulan,
         $tgl_bersejarah[2]->tahun);
?>
