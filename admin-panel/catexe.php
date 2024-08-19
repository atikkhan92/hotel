<?php
require_once('connection.php');

echo $bed_name = $_POST['bed_name'];


$query = "INSERT INTO `category` (`bed_name`) VALUES ('$bed_name')";


mysqli_query($connection,$query);

   header('location:dashboard.php');

?>
