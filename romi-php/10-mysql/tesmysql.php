<HTML>
<HEAD>
<TITLE>Tes MySQL</TITLE>
</HEAD>
<BODY>
<?php
  $pemakai  = "php";
  $password = "pinguin";
  $id_mysql = mysql_connect("localhost",
                            $pemakai,
                            $password);
  if (! $id_mysql)
    die("Database MySQL tak dapat dibuka");

  mysql_close($id_mysql);

  print("Sukses");
?>
</BODY>
</HTML>
