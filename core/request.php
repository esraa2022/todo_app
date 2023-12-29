<?php
function checkRequestMethod($method)
{
    if( $_SERVER['REQUEST_METHOD']== $method)
    return true;
    return false;
}
 function checkPostIput($input)
 {
   if(isset($_POST[$input]))
   return  $_POST[$input];
return false;
 }
 function checkGetIput($input)
 {
   if(isset($_GET[$input]))
   return  $_GET[$input];
return false;
 }
?>