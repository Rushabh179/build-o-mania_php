<?php
   $con=mysqli_connect("localhost","root","","build-o-mania");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $title = $_POST['title'];
   $description = $_POST['description'];
   $address = $_POST['address'];
   $price = $_POST['price'];            
   $category = $_POST['category'];
   $username = $_POST['username'];
   $email = $_POST['email'];;
   $phone = $_POST['phone'];
   
   mysqli_query($con,"INSERT INTO `houses` (title,description,address,price,category,username,email,phone)
								VALUES ('$title','$description','$address','$price','$category','$username','$email','$phone')");
									
   echo "Done";
   
   mysqli_close($con);
?>