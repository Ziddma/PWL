<HTML>
<HEAD>
<TITLE>Contoh Fungsi Pemeriksa Tipe</TITLE>
</HEAD>
<BODY>
  <?php
    function ya_tidak($arg)
    {
      if ($arg)
        return "Ya";
      else
        return "Tidak";
    }

    $data = "27.5";

    printf("is_bool? %s <BR>\n",
           ya_tidak(is_bool($data)));
    printf("is_string? %s <BR>\n",
           ya_tidak(is_string($data)));

    printf("is_double? %s <BR>\n",
           ya_tidak(is_double($data)));

    printf("is_numeric? %s <BR>\n",
           ya_tidak(is_numeric($data)));

    printf("Tipe data: %s <BR>\n",
           gettype($data));

  ?>

</BODY>
</HTML>
