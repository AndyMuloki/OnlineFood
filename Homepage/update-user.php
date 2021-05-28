<?php
include_once('database.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users SET Email='" . $_POST['Email'] . "', PhoneNo='" . $_POST['PhoneNo'] . "', FName='" . $_POST['FName'] . "', `SName`='" . $_POST['SName'] . "' , Gender='" . $_POST['Gender'] . "', Password='" . $_POST['Password'] . "' WHERE Email='" . $_POST['Email'] . "'");
echo "Record updated successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE Email='" . $_GET['Email'] . "'");
$row= mysqli_fetch_array($result);

?>

<html>
<head>
<title>Update User</title>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
	<fieldset style="max-width: 420px" style="position: center">
<form name="frmUser" method="post" action="" style="max-width: 400px" style="position: center">
	<div class="imgcontainer">
		<a href="userdb.php"><span class="close" style="font-size: 20px">X</span></a>
	</div>
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<div class="form_item">
Email: <br>
<input type="hidden" name="Email" class="form_input" value="<?php echo $row['Email']; ?>">
<input type="text" name="Email"  class="form_input" value="<?php echo $row['Email']; ?>">
<br>
Phone Number: <br>
<input type="text" name="PhoneNo" class="form_input" value="<?php echo $row['PhoneNo']; ?>">
<br>
First Name :<br>
<input type="text" name="FName" class="form_input" value="<?php echo $row['FName']; ?>">
<br>
Surname: <br>
<input type="text" name="SName" class="form_input" value="<?php echo $row['SName']; ?>">
<br>
Gender:<br>
<input type="text" name="Gender" class="form_input" value="<?php echo $row['Gender']; ?>">
<br>
Password:<br>
<input type="text" name="Password" class="form_input" value="<?php echo $row['Password']; ?>">
<br>
</div>
<!--input class="Join" type="submit" name="submit" value="UPDATE" class="B1"-->
<button class="B1" type="submit" name="submit" value="UPDATE">Update</button>
<a href="userdb.php">CANCEL</a>
 
<br>
</form>
</div>
</fieldset>

</body>
</html>