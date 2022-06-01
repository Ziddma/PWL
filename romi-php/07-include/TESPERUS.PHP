<HTML>
<HEAD>
<TITLE>Melihat efek include dan include_once</TITLE>
</HEAD>
<BODY>
  <?php
    print("Tes include dan include_once<BR>\n");
    include("judul.inc");
    include("tulperus.inc");
    
    tulis_perusahaan_saja();
    tulis_perusahaan_lengkap();
  ?>

</BODY>
</HTML>
