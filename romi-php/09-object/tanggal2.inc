<?php
  class kelas_tanggal
  {
    // Properti
    var $tanggal;
    var $bulan;
    var $tahun;

    // Metode
    function kelas_tanggal($tg = 1,
                           $bl = 9,
                           $th = 1964)
    {
      $this->tanggal = $tg;
      $this->bulan   = $bl;
      $this->tahun   = $th;

      print("Konstruktor dijalankan<BR>\n");
    }

    function set_tanggal($tg, $bl, $th)
    {
      $this->tanggal = $tg;
      $this->bulan   = $bl;
      $this->tahun   = $th;
    }
  }
?>
