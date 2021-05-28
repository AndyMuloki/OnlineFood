<?php
	$email_add=$_POST["Email"];
	$first_name=$_POST["FName"];
	$surname=$_POST["SName"];	
	$p_number=$_POST["PhoneNo"];
	$pword=$_POST["Password"];
	$gender=$_POST["Gender"];
	

	$server="localhost";
	$username="root";
	$password="";
	$database="food_system";

	$conn = new mysqli($server,$username,$password,$database);

	if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
		 $SELECT = "SELECT Email FROM users WHERE Email = ? Limit 1";
	     $INSERT = "INSERT INTO `users`(Email, PhoneNo, FName, SName, Gender, Password) VALUES(? , ? , ? , ? , ? , ?)";
	     //Prepare statement
	     $stmt = $conn->prepare($SELECT);

	     $stmt->bind_param("s", $email_add); 
	     $stmt->execute();
	     $stmt->bind_result($email_add);
	     $stmt->store_result();
	     $rnum = $stmt->num_rows;

	     if ($rnum==0) {
	      $stmt->close();
	      $stmt = $conn->prepare($INSERT);
	      $stmt->bind_param("sissss", $email_add, $p_number, $first_name, $surname, $gender, $pword); //s=string , i=integer
	      $stmt->execute();
	      echo "New record inserted sucessfully";
	     } else {
	      echo "Someone already register using this email";
	     }
     $stmt->close();
     $conn->close();
    }
?>