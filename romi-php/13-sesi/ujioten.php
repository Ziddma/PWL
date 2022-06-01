<?php
  include "otentik.inc";

  print("Tes pertama<BR>\n");
  if (otentikasi("bintang1", "bintang1"))
    print("Valid<BR>\n");
  else
    print("Tidak valid<BR>\n");

  print("Tes kedua<BR>\n");
  if (otentikasi("bintang", "di langit"))
    print("Valid<BR>\n");
  else
    print("Tidak valid<BR>\n");

?>
