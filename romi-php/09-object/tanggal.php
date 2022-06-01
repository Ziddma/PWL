<?php
  include "tanggal.inc";

  $tgl_kemerdekaan = new kelas_tanggal;
  $tgl_kemerdekaan->set_tanggal(17, 8, 1945);

  printf("Indonesia merdeka pada tanggal " .
         "%d/%d/%d",
         $tgl_kemerdekaan->tanggal,
         $tgl_kemerdekaan->bulan,
         $tgl_kemerdekaan->tahun);
?>
