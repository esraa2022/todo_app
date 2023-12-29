<?php
include('../database/run_DB.php');
include ('../core/request.php');
include ('../core/session.php');
include ('../core/validation.php');
if( checkPostIput('id'))
{
 $title=checkPostIput('title');

 
 if( !$title)
 {
     $errores[]='title is requierd';
 }
 else
{$title= santizeInput( $title );}
 if(minInput($title,3))
 {
     $errores[]='title must be larger than 3';
 }

 if(maxInput($title,60))
 {
     $errores[]='title must be smaller than 60';
 }
 $id=checkPostIput('id');




if(empty($errores))
{
$sql="UPDATE  `tasks` SET `title` = '$title' WHERE `id`= '$id' ";
$result=run($sql);
print($result);
if($result)
{
    
    sessionStore('edite','task is edited');
    redirect('../index.php');

}
}

else{
    sessionStore('editeErrores',$errores);
    redirect('../index.php');
}

}

?>