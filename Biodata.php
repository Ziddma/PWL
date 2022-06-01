<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>

 <body>
 <?php
  $Nama="Zidni Ilma";
  $IPK="3.9";
  $Tahun="2022";
  $Bulan="Maret";
  $jurusan="Ilmu Komputer";
  $Tempat="banjarnegara";
  $Tgl="18";
  $Bln="Oktober";
  $Thn="2000";
  $JK="Laki - Laki";
  $alamat="Tembalang";
  $tentang="Aku Ganteng";
 ?>
 <table border="1" cellpadding="5" cellspacing="0">

  <tr>
     <td>Nama Lengkap</td>
     <td> <?php echo $Nama ?> </td>
  </tr>
  <tr>
     <td>Lama Study</td>
     <td> <?php echo $Tahun ?> <?php echo $Bulan ?> </td>
  </tr>
  <tr>
     <td>IPK Terakhir</td>
     <td> <?php echo $IPK ?> </td>
  </tr>
  <tr>
     <td>Jurusan</td>
     <td> <?php echo $jurusan ?> </td>
  </tr>
  <tr>
     <td>TTL</td>
     <td> <?php echo $Tempat ?>,<?php echo $Tgl ?>/<?php echo $Bln ?>/<?php echo $Thn ?> </td>
  </tr>
  <tr>
     <td>Jenis Kelamin</td>
     <td> <?php echo $JK ?> </td>
  </tr>
  <tr>
     <td>Alamat</td>
     <td> <?php echo $alamat ?> </td>
  </tr>
  <tr>
     <td>Tentang Anda</td>
     <td> <?php echo $tentang ?> </td>
  </tr>
 </table>
 </body>
</html>