<?php
$bid = $_POST['b_id'];
require_once('connection.php');



$bid = $_POST['b_id'];
$nm = $_POST['nms'];
$email = $_POST['email'];
$in = $_POST['in'];
$out = $_POST['out'];
$numbs = $_POST['numbs'];
$name = $_POST['book'];

echo $val = implode(",", $name);

echo $qur = "INSERT INTO `user` (`name`, `email`,`in`,`out`, `phoneno`,`buy_id`, `r_no`) VALUES ('$nm', '$email','$in','$out', '$numbs','$bid', '$val')";

$res = mysqli_query($connection,$qur);

echo $upqur = "UPDATE `products` SET `room_status` = 'Booked' WHERE `products`.`room_id` IN ($val)";
$kires = mysqli_query($connection,$upqur);
header('location:thankyou.php');
exit;
?>
