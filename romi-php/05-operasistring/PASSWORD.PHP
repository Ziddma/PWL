<HTML>
<HEAD>
<TITLE>Contoh crypt untuk Menangani Password</TITLE>
</HEAD>
<BODY>

  Password yang betul adalah: abc123x
  
  <FORM METHOD=post>
    Nama :
    <INPUT TYPE=TEXT NAME=password><BR><BR>
    Password :
    <INPUT TYPE=PASSWORD NAME=password><BR><BR>
    <INPUT TYPE=SUBMIT VALUE="Login">
  </FORM>

  <?php
  if (isset($password))
  {
     $garam = "12";
     $passw_valid = crypt("abc123x", $garam);
     $enkripsi    = crypt($password, $garam);

     if ($passw_valid == $enkripsi)
        print("Password valid");
     else
        print("Password salah");
  }
  ?>

</BODY>
</HTML>
