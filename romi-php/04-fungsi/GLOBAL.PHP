<HTML>
<HEAD>
<TITLE>Pengaruh Lingkup Global</TITLE>
</HEAD>
<BODY>
  <?php
    function ganti()
    {
      global $bunga;

      $bunga = "Mawar";
    }

    $bunga = "Melati";

    print("$bunga");

  ?>

</BODY>
</HTML>
