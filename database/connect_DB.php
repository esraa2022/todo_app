<?php
function connect($serv,$name,$password=NULL,$dbname=NUll)
{
    $conn = mysqli_connect($serv,$name,$password,$dbname);
    if(!$conn)
{
    return 'error in connection'.mysql_connect_error($conn);
}
return $conn;
}


?>