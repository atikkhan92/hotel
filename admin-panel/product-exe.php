<?php
require_once('connection.php');

echo $b_id = $_POST['b_id'];
echo $room_number = $_POST['room_number'];
echo $room_option = $_POST['room_option'];
echo $room_price = $_POST['room_price'];
echo $room_status = $_POST['room_status'];


$query = "INSERT INTO `products` (`b_id`, `room_number`, `room_option`, `room_price`, `room_status`) VALUES ('$b_id', '$room_number', '$room_option', '$room_price', '$room_status')";
mysqli_query($connection,$query);
header('location:product_listing.php');

?>
