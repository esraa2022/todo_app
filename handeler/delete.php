<?php
include ('../database/run_DB.php');
include ('../core/request.php');
include ('../core/session.php');
include ('../core/validation.php');
if(checkRequestMethod("GET") && checkGetIput('id'))
{
$id=checkGetIput('id');
$sql = "DELETE FROM `tasks` WHERE `id`='$id'";
$result=run( $sql);


if($result)

  {   
     sessionStore('delete',"task is deleted");
     redirect('../index.php');
}
     
}


?>