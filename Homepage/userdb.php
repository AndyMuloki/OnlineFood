<?php
require_once("dbconnect.php");

$link=connect();

$sql="SELECT `ID`, `Email`, `PhoneNo`, `FName`, `SName` , `Gender` , `Password` FROM `users`";

$result=mysqli_query($link,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fetch Data from Database</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<style>
table {
  font-family: Montserrat, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 4px;
}

tr:nth-child(odd) {
  background-color: #dddddd;   
}

tr:nth-child(even) {
  background-color: #eee;
} 

.deletebtn{
	height: auto; 
	padding:.75rem .8125rem;
	font-size: 1rem;
  	text-align: center; 
  	margin-top: 8px;
  	background: #ffbc0d;
  	color: #292929;
  	border-radius: .25rem;
  	border: none;
  	margin: 1.1875rem 0 1.375rem;
    display: inline-block;
   margin-left: 1100px;
}
</style>
</head>
<body>

		<table align="center" style="width: 1000px; line-height: 60px;">
			<tr>
				<th colspan="9"><h2>Customer Records</h2></th>
			</tr>
			<t>
				<th>ID</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>First Name</th>
				<th>Surname</th>
				<th>Gender</th>
				<th>Password</th>
				<th colspan="2">Actions</th>
			</t>
		<?php
			while ($rows=mysqli_fetch_assoc($result))
			{
		?>
				<tr>
					<td><?php echo $rows['ID']; ?></td>
					<td><?php echo $rows['Email']; ?></td>
					<td><?php echo $rows['PhoneNo']; ?></td>
					<td><?php echo $rows['FName']; ?></td>
					<td><?php echo $rows['SName']; ?></td>
					<td><?php echo $rows['Gender']; ?></td>
					<td><?php echo $rows['Password']; ?></td>
					<td><a href="delete-user.php?Email=<?php echo $rows['Email']; ?>">Disable</a></td>
					<td><a target="blank" href="update-user.php?Email=<?php echo $rows['Email']; ?>">Update</a></td>							
				</tr>		
		<?php
			}
		?>				
		</table>
			<button value="order" onclick="myFunction()" class="deletebtn">Orders</button>

			<script>
				function myFunction() {
				  location.href = "orderdb.php";
				}
			</script>		
</html>
