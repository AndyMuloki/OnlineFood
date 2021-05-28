<?php
error_reporting(0); 
?> 

<?php

  $msg = ""; 

  if (isset($_POST['submitImage'])) { 

  
    $food_name=$_POST["fooditem"];
    $food_code=$_POST["code"];
    $food_image=$_FILES["food-image"];
    $food_price=$_POST["price"];

    $filename = $_FILES["food-image"]["name"]; 

    $tempname = $_FILES["food-image"]["tmp_name"];     

        $folder = "product-images/".$filename; 

    $file_type= substr($original_file_name, strpos(
    $original_file_name, '.'),strlen($original_file_name));

    $new_file_name=time().$file_type;

          

    $db = mysqli_connect("localhost", "root", "", "orders");
        $sql = "INSERT INTO `order_items`(`name`, `code`, `image`, `price`) VALUES ('$food_name','$food_code','$folder','$food_price')";

        mysqli_query($db, $sql); 

        if (move_uploaded_file($filename, $folder))  { 

            $msg = "Image uploaded successfully"; 

        }else{ 

            $msg = "Failed to upload image"; 

      } 

  } 

  $result = mysqli_query($db, "SELECT * FROM order_items"); 
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Upload Image</title>
  <link rel="stylesheet" type="text/css" href="upload.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<style>
  .backbtn{
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
  <form action="" method="POST" enctype="multipart/form-data">

  <div class="form_item">

    <label for="fooditem">Food Name</label>
    <input type="text"  name="fooditem" class="form-input" required="true" placeholder="Enter food name" id="fooditem"><br><br>

    <label for="code">Code</label>
    <input type="text"  name="code" class="form-input" required="true" placeholder="Enter food code" id="code"><br><br>

    <label for="foodimage">Food Image</label>
    <input type="file" name="food-image" required="true" id="foodimage"><br><br>

    <label for="foodprice">Food Price</label>
    <input type="number"  name="price" class="form-input" id="foodprice" required="true" placeholder="$0.00" min="0" step="any"><br><br>
  </div>

    <input type="submit" class="sub" name="submitImage" value="SAVE">

    <button value="order" onclick="myFunction()" class="backbtn">Back</button>

      <script>
        function myFunction() {
          location.href = "../Homepage/orderdb.php";
        }
      </script>

  </form>

</body>
