<?php
   include('session.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<link rel="stylesheet" type="text/css" href="../Homepage/home.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

	<div class="nav">
		<div>
		<span class="logo2"><img src="logo2.jpg" width="100px" height="100px"></span>
		<b><?php echo $login_session; ?></b>
		<a href="../cart/index.php" target="blank">Menu</a>
		<a href="#">About Our Burgers</a>
		<a href="#">Promos and deals</a>
		<!--a href="Login.php" target="blank">Login</a-->							
		<button class="right" type="submit"><a href="../cart/index.php">Order Now</a></button>
		</div>
		
	</div>

<style>
.header1{
  			background-image: url('back2.jpg');
  			 
  			background-repeat: no-repeat;
  			background-attachment: fixed;  
  			background-size: cover;
		}
</style>

	<div class="header1">
		<h1 class="head">THE BURGER JOINT</h1>
		<p class="font">Indulge yourself with the best mouth watering burgers that money can possibly buy!</p>	
		<button class="B2">Use our app to order</button>	
	</div>


	<div class="pri">
			
			
			<div class="pri1">
			<img src="delivery.jpg" width="500px", height="450px">
			</div>
			<div class="pri2">
			<h2>Order Burger Joint Now</h2>
			<p class="text">Stay Home and be safe, while we bring you all your favourite meals right to your doorstep.</p>
			<button class="B1">Order for Delivery</button>
			</div>
		

	</div>

	<div class="d0">
		<div class="d1" id="d1">
		<img src="1.jpg" width="369" height="260">
		<h3>Free Burger Promo</h3>		
		<p>For every burger you buy, we will give you a <strong> free burger!</strong></p>
		<p><span class="small" id="small">*Ts&Cs apply.</span></p>
		<button class="B1" type="Submit">Buy Now</button>
		</div>

		<div class="d2" id="d2">
		<img src="2.jpg" width="369" height="260">
		<h3>Free Delivery</h3>
		<p>We offer the best delivery service <strong>right to your doorstep!</strong></p>
		<button id="B1" class="B1" type="submit">Get the App</button>
		</div>

		<div class="d3" id="d3">
		<img src="3.jpg" width="376" height="252">
		<h3>Stay in touch with us</h3>
		<p>Be the first to know about our new limited promos</p>		
		<button id="B1" class="B1" type="submit"><a href="../Homepage/Register.html">Sign Up</a></button>
		</div>
	</div>

	<div class="footer">
		<div class="list">				
			<ul>                                  
				<li><a href="#">About Us</a></li><br>
				<li><a href="#">Terms and conditions</a></li>
				<li><a href="#">Values in Action</a></li>
				<li><a href="#">Tips and Suggestions</a></li>
				<li><a href="#">Download App</a></li>
			</ul>
		</div>

		<div class="list">
			<ul>
				<li><a href="#">Career</a></li><br>
				<li><a href="#">Employee Benefits</a></li>
				<li><a href="#">Meet our staff</a></li>
				<li><a href="#">Management</a></li>
				<li><a href="#">Working with us</a></li>
				<li><a href="#">Apply Now</a></li>
			</ul>
		</div>

		<div class="list">
			<ul>
				<li><a href="#">Services</a></li><br>
				<li><a href="#">Wi-Fi</a></li>
				<li><a href="#">Merchandise</a></li>
				<li><a href="#">Get Our App</a></li>
				<li><a href="#">Delivery</a></li>
				<li><a href="#">Mobile order and Pay</a></li>
			</ul>
		</div>

		<div class="list">
			<ul>
				<li><a href="#">Our Partners</a></li><br>
				<li><a href="#">M-Pesa</a></li>
				<li><a href="#">KFC</a></li>
				<li><a href="#">Coca-cola</a></li>
				<li><a href="#">Kuku Foods</a></li>
				<li><a href="#">Farmer's Choice</a></li>
			</ul>
		</div>

		<div class="list">
			<ul>
				<li><a href="#">Contact Us</a></li><br>
				<li><a href="#">Donations</a></li>
				<li><a href="#">Restaurant Feedback</a></li>
				<li><a href="#">ustmoer service</a></li>
				<li><a href="#">Partner with us</a></li>
				<li><a href="#">Mobile App Feedback</a></li>
			</ul>
		</div>

	</div>
	<div style="margin-top:40px;"></div>

	<div>
	<p class="copyright">                           
        <img src="logo2.jpg" alt="Burger Joint's Home">
        © 2017 - 2020&nbsp;The Burger Joint. All Rights Reserved</p>
    </div>
</body>
</html>

