<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "input";

$db = mysqli_connect($server, $user, $pass, $database);

if (!$db) {
    die("<script>alert('Connection Failed.')</script>");
} 

?>
