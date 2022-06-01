<?php
  include "waktu.inc";

  $pertemuan =
    new kelas_waktu(26, 1, 2002, 13, 30);

  print("Tanggal: " .
        $pertemuan->peroleh_tgl() .
        "<BR>\n");
  print("jam : " .
        $pertemuan->peroleh_jam() .
        "<BR>\n");
?>
