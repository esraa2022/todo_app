<?php
include('run_DB.php');

$conn = connect("localhost","root");


$sql ="CREATE DATABASE IF NOT EXISTS todoapp";
run($sql,$conn);
?>