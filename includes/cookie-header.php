<?php
define('COOKIE_ONLINE', false);
if(!isset($_COOKIE['cc']))
{
  /*------------------------ BOF Set Cookie  ---------------------------------*/
    $cookie_value = md5(('ILOVEMYWEBSITE').'samyakonline.biz');
    /*------------------------ EOF Set Cookie  ---------------------------------*/
    if(COOKIE_ONLINE)
    {
      // setcookie(name, value, expire, path, domain, secure, httponly);
      setcookie('cc',  $cookie_value, time()+60*60*24*30, '/', '.samyakonline.biz', 'true', 'true');
    }
    else
    {
      setcookie('cc', $cookie_value, time()+60*60*24*30, '/');
      
    }
}
?>