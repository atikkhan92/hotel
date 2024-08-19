<?php
include("connection.php");
$id = $_POST['room_id'];


echo $room_number = $_POST['room_number'];
echo $room_status = $_POST['room_status'];
echo $room_option = $_POST['room_option'];
echo $room_price = $_POST['room_price'];
echo $b_id = $_POST['bed_id'];


echo	 $query="UPDATE products SET b_id = '$b_id', room_number = '$room_number', room_option = '$room_option', room_price = '$room_price',  room_status = '$room_status' WHERE room_id = ".$id;
	
				mysqli_query($connection,$query);
				?>
				
			 <?php
			 header("location:product_listing.php");

?>