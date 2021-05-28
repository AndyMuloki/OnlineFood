<?php
include_once('database2.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE `order_items` SET name='" . $_POST['name'] . "', code='" . $_POST['code'] . "', image='" . $_POST['image'] . "', `price`='" . $_POST['price'] . "' WHERE name='" . $_POST['name'] . "'");
echo "Record updated successfully";
}
$result = mysqli_query($conn,"SELECT * FROM order_items WHERE name='" . $_GET['name'] . "'");
$row= mysqli_fetch_array($result);

?>

<html>
<head>
<title>Update Orders</title>
<link rel="stylesheet" type="text/css" href="reg.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<fieldset style="max-width: 420px" style="position: center">
<form name="frmUser" method="post" action="" style="max-width: 400px" style="position: center">
	<div class="imgcontainer">
		<a href="orderdb.php"><span class="close" style="font-size: 20px">[X]</span></a>
	</div>
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<div class="form_item">
Name
<input type="hidden" name="name" class="form_input" value="<?php echo $row['name']; ?>">
<input type="text" name="name"  class="form_input" value="<?php echo $row['name']; ?>">

Code<br>
<input type="text" name="code" class="form_input" value="<?php echo $row['code']; ?>">
<br>
Image<br>
<input type="text" name="image" class="form_input" value="<?php echo $row['image']; ?>">
<br>
Price<br>
<input type="number" name="price" class="form_input" min="0" step="any" value="<?php echo $row['price']; ?>">
<br>

</div>

<button class="B1" type="submit" name="submit" value="UPDATE">Update</button>
<!--input class="B1" type="submit" name="submit" value="UPDATE"-->
<a href="orderdb.php">CANCEL</a>
 

</form>
</div>
</fieldset>

</body>
</html>