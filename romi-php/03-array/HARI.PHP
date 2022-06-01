<HTML>
<HEAD>
<TITLE>Menentukan Nama Hari Memakai Array</TITLE>
</HEAD>
<BODY>
  <?php
    
    $hari["Sunday"]    = "Minggu";
    $hari["Monday"]    = "Senin";
    $hari["Tuesday"]   = "Selasa";
    $hari["Wednesday"] = "Rabu";
    $hari["Thursday"]  = "Kamis";
    $hari["Friday"]    = "Jumat";
    $hari["Saturday"]  = "Sabtu";

    $hari_inggris = date("l");
    print("Hari ini hari $hari[$hari_inggris]");

  ?>

</BODY>
</HTML>
