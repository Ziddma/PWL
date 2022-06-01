<?php
  include_once "tanggal2.inc";

  class kelas_waktu extends kelas_tanggal
  {
    // Properti tambahan
    var $jam;
    var $menit;

    // Konstruktor
    function kelas_waktu($tg=1, $bl=1, $th=1980,
                         $jm=0, $mn=0)
    {
      $this->tanggal = $tg;
      $this->bulan   = $bl;
      $this->tahun   = $th;
      $this->jam     = $jm;
      $this->menit   = $mn;

      print("Konstruktor kelas_waktu dijalankan<BR>\n");
    }

    // Metode
    function peroleh_tgl()
    {
      return "$this->tanggal" .
             "/$this->bulan" .
             "/$this->tahun";
    }

    function peroleh_jam()
    {
      return "$this->jam:$this->menit";
    }
  }

?>
