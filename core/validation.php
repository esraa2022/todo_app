<?php
function santizeInput($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}

function requerdImput($input)
{
    if(empty($input))
    return true;
    return  false;
}

function minInput($input,$length)
{
    if(strlen($input)<$length)
    return true;
return false;
}

function maxInput($input,$length)
{
    if(strlen($input)>$length)
    return true;
return false;
}
function redirect($path)
{
    header('location:'.$path);
}
?>