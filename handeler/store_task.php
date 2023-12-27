<?php
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
    echo mysqli_affected_raws($conn);


}
 ?>