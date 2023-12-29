<?php



include('run_DB.php');

$sql ="CREATE TABLE IF NOT EXISTS tasks
(
  id INT PRIMARY KEY AUTO_INCREMENT,
   title  VARCHAR(200) NOT NULL

)";
run($sql);


?>