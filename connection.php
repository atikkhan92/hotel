<!--<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
die("Database Connection Failed" . mysqli_error());
}
$select_db = mysqli_select_db($connection,'hotel');
if (!$select_db){
die("Database Selection Failed" . mysqli_error());
}
ob_start();
error_reporting(0);
?>-->


<?php
@session_start();
$host="localhost";
$username="root";
$password="";
$database="hotel";
$conn=mysqli_connect($host,$username,$password,$database);
if($conn)
{
	
}
else
{
	echo "database Not Connected";
}	
?>