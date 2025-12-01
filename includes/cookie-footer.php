<?php
if(!isset($_COOKIE['cc']))
{  
?>
<div class="footer-cookie" id="cookieBar">
<div class="container">
<div class="col-md-12  align-items-center">
This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies policy.
      <a href="#" class="btn btn-outline-light ml-2">See Details</a> 
  <a href="#" class="btn btn-light mr-2" onclick="getElementById('cookieBar').style.display='none'">OK</a> 
</div></div>
</div>
<?php 
 }
?>
