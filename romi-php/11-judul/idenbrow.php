<HTML>
<HEAD>
<TITLE>Menampilkan Nama Browser</TITLE>
</HEAD>
<BODY>

<?php
  print("Anda menggunakan ");
  $id_browser = $HTTP_USER_AGENT;
  if (strpos($id_browser, "Netscape") > 0)
    print("Netscape");
  else
    if (strpos($id_browser, "IE") > 0)
      print("Internet Explorer");
    else
      print($id_browser);
?>

</BODY>
</HTML>
