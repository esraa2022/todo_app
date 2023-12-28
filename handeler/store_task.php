<?php
start_session();
$conn = mysqli_connect("localhost","root","","todoapp");
if(!$conn)
{
    echo 'connect error'.mysqli_connect_error($conn);
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']))
{
    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    $sql="INSERT INTO 'tasks'('title') VALUES( $title)";
    $results= mysqli_query($conn,$sql);
    if( mysqli_affected_raws($conn)==1)
    {
        $_SESSION['sucess'] ='data  is added suceccfuly';

    }
header('location:../index.php');

}
 ?>