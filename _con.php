<?php
$server = "";
$username = "";
$password = "";
$db = "";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con){
    die("failed" . mysqli_connect_error());
}
 
?>