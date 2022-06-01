<HTML>
<HEAD>
<TITLE>Menentukan Nama Hari Memakai Array</TITLE>
</HEAD>
<BODY>
  <?php
    
    $hari = array("Sunday" => "Minggu",
                  "Monday" => "Senin",
                  "Tuesday" => "Selasa",
                  "Wednesday" => "Rabu",
                  "Thursday"=> "Kamis",
                  "Friday" => "Jumat",
                  "Saturday" => "Sabtu");

    $hari_inggris = date("l");
    print("Hari ini hari $hari[$hari_inggris]");

  ?>

</BODY>
</HTML>
