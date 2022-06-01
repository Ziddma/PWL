<HTML>
<BODY>

<?php
  if ( ! file_exists("takada") )
    die("Berkas takada tidak ditemukan");

  $fp = fopen("takada", "r");
  if ($fp)
  {
    $data = fgets($fp, 255);
    print($data);
  }
?>

</BODY>
</HTML>
