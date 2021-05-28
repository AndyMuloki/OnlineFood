<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT ID FROM users WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
        
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>      
      <link rel="stylesheet" type="text/css" href="login.css">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">      
   </head>   
     
   <div class="login_box">
   <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
       <div class="form_title"><b>Login</b></div>      
      
         <div class="form_item"> 
       
            <label class="form_label">Email</label>
            <input type = "email" name = "Email" class="form_input">

            <label class="form_label">Password</label>
            <input type = "password" name = "Password" class="form_input">
            <span><?php echo $error; ?></span>

            <p><a href="login2.php">Admin Login</a></p>
            
            <button class="B1" type="submit" value=" Submit ">Login</button>
         </div>
            <p>Don't have an account yet? <a href="../Homepage/Register.html">Sign up now</a>.</p>

   </form>   
   </div>         
              
   </body>
</html>

