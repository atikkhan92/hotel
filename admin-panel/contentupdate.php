<?php
include('connection.php');
echo $id = $_POST['id'];




echo $welcome_title = $_POST['welcome_title'];
echo $welcome_text = addslashes($_POST['welcome_text']);
echo $ph_number = $_POST['ph_number'];
echo $email = $_POST['email'];
echo $address = $_POST['address'];

	

 $query = "UPDATE `content` SET welcome_title = '$welcome_title', welcome_text = '$welcome_text', ph_number = '$ph_number',  email = '$email',  address = '$address' WHERE id = ".$id;
				mysqli_query($connection,$query);
			 header("location:content.php");

?>