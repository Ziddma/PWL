<?php
  include "otentik.inc";
 
  session_start();

  if (! empty($pemakai))
    $sesi_user = $pemakai;

  if (! empty($sandi))
    $sesi_pass = $sandi;
  
  if (! otentikasi($sesi_user, $sesi_pass))
  {
    $msg = "Harap diisi dengan benar";
    $alamat = "http://$NAMA_SERVER/loginbin.php";
    header("Location: $alamat?msg=$msg");
    exit();
  }

  session_register("sesi_user");
  session_register("sesi_pass");

?>

<HTML>
<HEAD>
<TITLE>Menu Utama Manajemen Data Bintang Film</TITLE>
</HEAD>

<BODY>
<CENTER>
<H2>Bintang Film</H2>
<HR>
<A HREF="tambin1.php">Menambah Data</A>
<BR>
<A HREF="dafbin.php">Mengubah/Menghapus Data</A>
<BR>
<P>
<H2>Film</H2>
<HR>
<A HREF="tamfil1.php">Menambah Data</A>
<BR>
<A HREF="daffil.php">Mengubah/Menghapus Data</A>
<BR>
<P>
<H2>Bintang Film dan Film</H2>
<HR>
<A HREF="dafbff.php">Menambah / Menghapus Data</A>
<BR>
<P>
<HR>
<A HREF="logotbin.php">Logout</A>
</CENTER>
</BODY>
</HTML>

