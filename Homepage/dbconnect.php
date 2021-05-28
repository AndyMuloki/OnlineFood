<?php
function connect(){
$server="localhost";
$username="root";
$password="";
$database="food_system";

$link=mysqli_connect($server,$username,$password,$database) or die("Could not connect".mysqli_connect_error());

return ($link);
}

function setData($sql){
	$link=connect();
	if (mysqli_query($link, $sql)) {
		# code...
		echo "Success";
	}
	else{
		echo "Error".mysqli_error($link);
	}
}

function getData($sql){
	$link=connect(); 
	$results=mysqli_query($link,$sql);
	$rows=array();

if(mysqli_num_rows($results)> 0){
	while ($row=mysqli_fetch_assoc($results)) {
		# code...
		$rows[]=$row;
	}
	
	return $rows;
}
}

?>