<?php
$conn = mysqli_connect("localhost","root","");

if(!$conn)
{
    echo 'error in connection'.mysql_connect_error($conn);
}
$sql ="CREATE DATABASE IF NOT EXISTS todoapp";
$todo=mysqli_query($conn,$sql);
mysqli_close($conn);
//create table

$conn = mysqli_connect("localhost","root","","todoapp");

if(!$conn)
{
    echo 'error in connection'.mysql_connect_error($conn);
}
$sql ="CREATE TABLE IF NOT EXISTS tasks
(
  id INT PRIMARY KEY AUTO_INCREMENT,
   title  VARCHAR(200) NOT NULL

)";
$task=mysqli_query($conn,$sql);
echo mysqli_error($conn); 
mysqli_close($conn);

?>