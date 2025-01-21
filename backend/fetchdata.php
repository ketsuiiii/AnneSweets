<?php 
require_once '../backend/DB.php';
$connect = mysqli_connect($host, $username, $password, $dbname);

if(!$connect) {
    die ("connection error");
}
?>