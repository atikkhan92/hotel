<?php
include("connection.php");
$id=$_GET['id'];

$sql = "delete from category where bed_id=".$id;
$result = mysqli_query($connection,$sql);

$kksql = "delete from products where s_id=".$id;
$kkresult = mysqli_query($connection,$kksql);

						?>
				<?php
						header("location:dashboard.php");
?>