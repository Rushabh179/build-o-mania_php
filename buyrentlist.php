<?php
   $con=mysqli_connect("localhost","root","","build-o-mania");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $category = $_POST['category'];	
   $storeArray = Array();
   $result = mysqli_query($con,"SELECT title FROM houses WHERE category='$category'");
   while($row = mysqli_fetch_array($result)){
	   $storeArray[] =  $row['title'];
   }
   
   for($i=0;$i<count($storeArray);$i++){
	echo $storeArray[$i]."  ";   
   }
   
   mysqli_close($con);
?>