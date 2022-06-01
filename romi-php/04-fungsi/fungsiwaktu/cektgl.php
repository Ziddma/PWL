<HTML>
<HEAD>
<TITLE>Contoh Memeriksa Tanggal</TITLE>
</HEAD>
<BODY>
  <FORM ACTION=cektgl2.php METHOD=get>
    Tanggal Lahir:
    <SELECT name=tanggal>
       <OPTION VALUE=0 SELECTED >Tanggal

       <?php
         //Bentuk pilihan tanggal 1 sampai dengan 31
         for($i = 1; $i < 32; $i++)
           print("<OPTION VALUE=$i >$i");
       ?>

       </OPTION></SELECT>

    <SELECT NAME=bulan>
       <OPTION VALUE=0 SELECTED >Bulan
       <OPTION VALUE=1>Januari
       <OPTION VALUE=2>Pebruari
       <OPTION VALUE=3>Maret
       <OPTION VALUE=4>April
       <OPTION VALUE=5>Mei
       <OPTION VALUE=6>Juni
       <OPTION VALUE=7>Juli
       <OPTION VALUE=8>Agustus
       <OPTION VALUE=9>September
       <OPTION VALUE=10>Oktober
       <OPTION VALUE=11>November
       <OPTION VALUE=12>Desember
       </OPTION></SELECT>

    <SELECT name=tahun>
       <OPTION VALUE=0 SELECTED >Tahun
       <?php
         // Bentuk pilihan tahun sebanyak 120 tahun
         // dimulai tahun sekarang

         $sekarang = (integer) date("Y");
         for($i = $sekarang; $i > ($sekarang - 120); $i--)
           print("<OPTION VALUE=$i >$i <BR>\n");
       ?>

       </OPTION></SELECT>

    <BR><BR>
    <INPUT TYPE=SUBMIT VALUE="Cek">

  </FORM>

</BODY>
</HTML>



