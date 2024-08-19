<?php
session_start();
require_once('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];



    $query="SELECT * FROM `admin_tbl` WHERE `user_name`='$username' and `password`='$password'";

    $res=mysqli_query($connection,$query);
    $checkUser=mysqli_num_rows($res);
	
	
    if($checkUser > 0){
         $_SESSION['LOGIN_STATUS']="True";
         
		
		 $con="SELECT * FROM `admin_tbl` WHERE `user_name`='$username' and `password`='$password'";
	     $result = mysqli_query($connection,$con);
         if($row = mysqli_fetch_array($result))
		 {
			  $_SESSION['username']= $row['user_name'];
		 }
		 
         echo 'correct';
		 header('location:dashboard.php');
    }else{
         echo "Please Enter Correct user Details";
    }

?>