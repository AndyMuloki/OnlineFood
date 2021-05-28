<?php
$server="localhost";
$username="root";
$password="";
$database="food_system";

$mysqli = new mysqli($server,$username,$password,$database);

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>

