<HTML>
<HEAD>
<TITLE>Login Manajemen Data Bintang Film</TITLE>
</HEAD>
<BODY>
<CENTER>
<H1>Manajemen Data Bintang Film</H1>
<HR>
<FORM ACTION="menubin.php" METHOD="POST">
<TABLE>
  <TR>
    <TD>Pemakai</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="pemakai">
    </TD>
  </TR>
  <TR>
    <TD>Password</TD>
    <TD>
      <INPUT TYPE="PASSWORD" NAME="sandi">
    </TD>
  </TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="Login">
<INPUT TYPE="RESET"  VALUE="Reset">
</FORM>

<?php
  print("$msg<BR>\n");
?>

</CENTER>
</BODY>
</HTML>
