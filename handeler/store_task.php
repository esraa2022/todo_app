<?php
session_start();
include('../database/run_DB.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']))
{
    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    $sql="INSERT INTO tasks(title) VALUES( '$title')";
    $results=run($sql);
    if( mysqli_affected_rows($conn)==1)
    {
        $_SESSION['sucess'] ='data  is added suceccfuly';

    }
header('location:../index.php');

}
 ?>