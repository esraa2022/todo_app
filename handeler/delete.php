<?php
include('../database/run_DB.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql = "DELETE FROM `tasks` WHERE `id`='$id'";
$result=run( $sql);

}
if($result)
{
     $_SESSION['delete']="task is deleted";

     header('location:../index.php');
}

?>