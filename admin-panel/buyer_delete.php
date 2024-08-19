<?php
include("connection.php");
$id=$_GET['id'];


$kksql = "delete from user where id=".$id;
$kkresult = mysqli_query($connection,$kksql);

						?>
				<?php
						header("location:buylist.php");
?>