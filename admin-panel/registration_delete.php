<?php
include("connection.php");
$id=$_GET['id'];


$kksql = "delete from registration where id=".$id;
$kkresult = mysqli_query($connection,$kksql);

						?>
				<?php
						header("location:registration_details.php");
?>