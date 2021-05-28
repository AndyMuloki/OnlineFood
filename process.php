<?php
session_start();

if (isset($POST["Login"])) {
	# code...
	$_SESSION["Email"].htmlentities($POST["Email"]);
}
else{
	$_SESSION["Email"]="";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Test</title>
</head>
<body>
	<p>
		Hello
		<?php
			if(isset($_SESSION["Email"])){
				echo $_SESSION["Email"];
			}
			else{
				echo "Unknown";
			}

		?>
	</p>


</body>
</html>

 