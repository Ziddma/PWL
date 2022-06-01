<HTML>
<HEAD>
<TITLE>Info Variabel</TITLE>
</HEAD>
<BODY>
  <?php
    $wadah = array(1, 2,
                   array("Jazz", "Swing", "Fusion"));

    print("<B>Info print_r: </B><BR>\n");
    print_r($wadah);
    
    print("<BR>\n<B>Info var_dump: </B><BR>\n");
    var_dump($wadah);

  ?>

</BODY>
</HTML>
