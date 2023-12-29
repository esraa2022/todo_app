<?php
include('connect_DB.php');
$conn = connect("localhost","root","","todoapp");
function run($sql,$con=NULL)
{
    global $conn;

    $con = $con ?? $conn;
    $result=mysqli_query($con,$sql);
    echo mysqli_error($con); 
   
    return $result;
}
?>