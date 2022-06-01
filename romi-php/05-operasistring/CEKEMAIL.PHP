<HTML>
<HEAD>
<TITLE>Contoh Pemeriksaan Alamat E-mail</TITLE>
</HEAD>
<BODY>

  <FORM>
    e-mail Anda: 
    <INPUT TYPE=TEXT NAME=email><BR><BR>
    <INPUT TYPE=SUBMIT VALUE="Cek">
  </FORM>

  <?php
  if (isset($email))
    if (empty($email))
      print("Harap mengisikan e-mail <BR>\n");
    else
    {
      // Cek e-mail
      if (ereg("^.+@.+\\..+$", $email))
        print("Alamat e-mail $email valid <BR>\n");
      else
        print("Alamat e-mail $email tidak valid <BR>\n");
    }
  ?>

</BODY>
</HTML>
