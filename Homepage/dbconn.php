<?php
function connect()
{	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "food_system";

	$link = mysqli_connect($servername,$username,$password,$database) or die("connection failed".mysqli_connect_error());
	return($link);

}

function setData($sql)
{
	$link = connect();
	if (mysqli_query($link, $sql)) {
		# code...
		echo "Successful";
	}
	else
	{
		echo "Error".mysqli_error($link);
	}
}
  
function Data($sql)
{	

}
?>