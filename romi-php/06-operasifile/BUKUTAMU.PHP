<HTML>
<HEAD>
<TITLE>BUKU TAMU</TITLE>
</HEAD>
<BODY>
  <FORM ACTION=simpan.php METHOD=get>
    Nama : 
    <INPUT TYPE=TEXT NAME=nama><P>

    Jenis kelamin : <BR>
    <INPUT TYPE=RADIO VALUE="P" CHECKED NAME="sex">Wanita<BR>
    <INPUT TYPE=RADIO VALUE="L" NAME="sex">Pria<P>

    E-mail :
    <INPUT TYPE=TEXT NAME=email><P>

    Minat : <BR>
    <INPUT TYPE=CHECKBOX NAME=minat1 >Bonsai<BR>
    <INPUT TYPE=CHECKBOX NAME=minat2 >Tanaman Hias<BR>
    <INPUT TYPE=CHECKBOX NAME=minat3 >Musik Jazz<BR>
    <INPUT TYPE=CHECKBOX NAME=minat4 >Pemrograman<P>

    Komentar :
    <TEXTAREA ROWS=4 COLS=40 NAME=komentar>
    </TEXTAREA>
    <P>
    <INPUT TYPE=SUBMIT VALUE="Simpan">
  </FORM>

</BODY>
</HTML>
