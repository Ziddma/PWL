<HTML>
<HEAD>
<TITLE>Login</TITLE>
</HEAD>
<BODY>

<?php
  if (!empty($msg))
    print("$msg<BR>\n");
?>

<FORM ACTION=setcooki.php METHOD=post>
Pemakai :
<INPUT TYPE=TEXT NAME=pemakai><BR><BR>
Password :
<INPUT TYPE=PASSWORD NAME=sandi><BR><BR>
<INPUT TYPE=SUBMIT VALUE="Login">
</FORM>

</BODY>
</HTML>
