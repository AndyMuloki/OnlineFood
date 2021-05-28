<?php
$url='localhost';
$username='root';
$password='';
$database='orders';
$conn=mysqli_connect($url,$username,$password,$database);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>