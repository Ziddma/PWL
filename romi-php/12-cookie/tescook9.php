<?php
  if (isset($hari))
    while (list($nama, $nilai) = each($hari))
    {
      print("$nama : $nilai <BR>\n");
    }
  else
    print("Cookie hari tidak ada");
?>
