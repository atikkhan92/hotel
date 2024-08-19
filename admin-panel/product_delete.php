<?php
include("connection.php");
$id=$_GET['id'];


$kksql = "delete from products where room_id=".$id;
$kkresult = mysqli_query($connection,$kksql);

						?>
				<?php
						header("location:product_listing.php");
?>