<HTML>
<HEAD>
<TITLE>Pengaruh Lingkup Global</TITLE>
</HEAD>
<BODY>
  <?php
    function ganti()
    {
      $GLOBALS["bunga"] = "Mawar";
    }

    $bunga = "Melati";

    print("$bunga");

  ?>

</BODY>
</HTML>
