<HTML>
<BODY>

<?php
  $fp = fopen("takada", "r");
  if ($fp)
  {
    $data = fgets($fp, 255);
    print($data);
  }
?>

</BODY>
</HTML>
