<HTML>
<BODY>

<?php
  $fp = @fopen("takada", "r") or
        die ("Berkas takaada tidak ditemukan");

  $data = fgets($fp, 255);
  print($data);

?>

</BODY>
</HTML>
