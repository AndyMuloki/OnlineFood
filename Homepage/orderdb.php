<?php
require_once("db_conn.php");

$link=connect();

$sql="SELECT `food_id`, `name`, `code`, `image`, `price` FROM `order_items`";

$result=mysqli_query($link,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fetch Orders from Database</title>
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
				<th colspan="8"><h2>Orders</h2></th>
			</tr>
			<t>
				<th>Food ID</th>
				<th>Name</th>
				<th>Code</th>
				<th>Image</th>
				<th>Price</th>				
				<th colspan="2">Actions</th>
			</t>
		<?php
			while ($rows=mysqli_fetch_assoc($result))
			{
		?>
				<tr>
					<td><?php echo $rows['food_id']; ?></td>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['code']; ?></td>
					<td><?php echo $rows['image']; ?></td>
					<td><?php echo $rows['price']; ?></td>					
					<td><a href="delete-user.php?Email=<?php echo $rows['Email']; ?>">Delete</a></td>
					<td><a target="blank" href="update-order.php?name=<?php echo $rows['name']; ?>">Update</a></td>						 			
				</tr>
		<?php
			}
		?>

		</table>

		<button value="order" onclick="myFunction()" class="deletebtn">Add new food</button>

			<script>
				function myFunction() {
				  location.href = "../cart/up_img.php";
				}
			</script>				
</html>