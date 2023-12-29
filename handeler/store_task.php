<?php

include('../database/run_DB.php');
include ('../core/request.php');
include ('../core/session.php');
include ('../core/validation.php');



if(checkRequestMethod('POST') )
{
    $title = checkPostIput('title');
   
  
    if(!$title)
    {
        $errores[]='title is requierd';
    }
    else
    {
     $title= santizeInput( $title );
    }

    if(minInput($title,3))
    {
        $errores[]='title must be larger than 3';
    }

    if(maxInput($title,60))
    {
        $errores[]='title must be smaller than 60';
    }



if(empty($errores))
{$sql="INSERT INTO tasks(`title`) VALUES( '$title')";
    $results=run($sql);
    if( mysqli_affected_rows($conn)==1)
    {
        
        sessionStore('success','data  is added suceccfuly');

    }

}
else
{
    sessionStore('errores',$errores);

}
}
redirect('../index.php');
 ?>