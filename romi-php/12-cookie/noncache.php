<?php
  // Pengaturan header
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Last-Modified: " .
         gmdate("D, d M Y H:i:s"));
    
  if ($SERVER_PROTOCOL == "HTTP/1.0")
    header("Pragma: no-cache");
  else
    header("Cache-Control: no-cache, must-revalidate");

  // Pencacah
  if (! isset($counter))
    $pencacah = 0;
  else
    $pencacah = $counter;

  $pencacah++;
  setcookie("counter", $pencacah,
            3600 * 24 * 365);
?>

<HTML>
<HEAD>
<TITLE>Contoh halaman yang tidak di-cached</TITLE>
</HEAD>
<BODY>
<?php
  print("Pencacah : $pencacah");
?>
</BODY>
</HTML>
