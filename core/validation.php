<?php
function santizeInput($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}

function requerdImput($input)
{
    if(empty($input))
    return false;
return true;
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
?>