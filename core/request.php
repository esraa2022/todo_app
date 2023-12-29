<?php
function checkRequestMethod($method)
{
    return $_SERVER['REQUEST_METHOD']== $method;
}
 function checkPostIput($input)
 {
    return isset($_POST[$input]);
 }
 function checkGetIput($input)
 {
    return isset($_GET[$input]);
 }
?>