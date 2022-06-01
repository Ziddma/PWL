<?php
  // Menghapus cookie
  $isi_nama = $nama;
  setcookie("nama");
  print("Sebelum dihapus : $isi_nama<BR>\n");
  print("Sesudah dihapus : $nama");
?>
