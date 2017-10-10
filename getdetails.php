<?php
   $con=mysqli_connect("localhost","root","","build-o-mania");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $title = $_POST['title'];	
   $storeArray = Array();
   $result = mysqli_query($con,"SELECT title,description,address,price,category,username,email,phone
								FROM houses WHERE title='$title'");
								
	$row = mysqli_fetch_array($result);
	
	for($i=0;$i<8;$i++){
		echo $row[$i]."     ";   
   }
	
	
   #while($row = mysqli_fetch_array($result)){
	#   $storeArray[] =  $row['description'];
   #}
   
   #for($i=0;$i<count($storeArray);$i++){
	#echo $storeArray[$i]."  ";   
   #}
   
   mysqli_close($con);
?>