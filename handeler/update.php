<?php
include('../database/run_DB.php');
if(isset($_POST['title']) && isset($_POST['id']))
{
 $title=$_POST['title'];
 $id=$_POST['id'];

$sql="UPDATE  `tasks` SET `title` = '$title' WHERE `id`= '$id' ";
$result=run($sql);
print($result);
if($result)
{
    $_SESSION['edite'] = 'task is edited';
    header('location:../index.php');
}

}

?>