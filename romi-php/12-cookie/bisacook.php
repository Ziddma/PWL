<?php
  $str_uji = "uji_query";
  if ($QUERY_STRING != $str_uji)
  {
    setcookie("uji_cookie", $str_uji);
    header("Location: $PHP_SELF?$str_uji");
    exit();
  }

  if ($uji_cookie == $str_uji)
    print("Browser mendukung Cookie");
  else
    print("Browser TIDAK mendukung Cookie");
?>
