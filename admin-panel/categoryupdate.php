<?php
include("connection.php");
$id = $_POST['bed_id'];



echo $bed_name = $_POST['bed_name'];

echo $query="UPDATE category SET bed_name = '$bed_name' WHERE bed_id = ".$id;
				mysqli_query($connection,$query);
			 header("location:dashboard.php");

?>