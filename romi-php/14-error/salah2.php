<HTML>
<BODY>

<?php
  $fp = fopen("takada", "r");
  $data = fgets($fp, 255);
  print($data);
?>

</BODY>
</HTML>
