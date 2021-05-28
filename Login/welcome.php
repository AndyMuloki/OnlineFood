<?php
   include('session.php');    
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">      
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; 
        		background-color: #f4f4f4f4;
        		color: #555555;
        		font-family: 'Montserrat';
        	}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo $login_session; ?></b>. Welcome to <b>BURGER JOINT.</b></h1>
    </div>
    <p>
        <a href="homepage2.php" class="btn btn-warning">Continue</a>       
        <a href="logout.php" class="btn btn-danger">Log Out of Your Account</a>

    </p>
</body>
</html>