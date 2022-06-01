<?php
  if (! isset($counter))
    $pencacah = 0;
  else
    $pencacah = $counter;

  $pencacah++;
  setcookie("counter", $pencacah,
            3600 * 24 * 365);
?>

Halo. Anda telah mengunjungi halaman ini

<?php
  print("$pencacah kali");
?>
