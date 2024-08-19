<?php
session_start();
	require_once('connection.php');
	require_once('header.php');
	if(isset($_SESSION['user_email']))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='registration.php'</script>";
}
?>
	
	<div style="text-align:center; padding-top:20px;"></div>
<header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Room Book</h1>
        </header>
		<br>
		<br><br>	
		<center>
		<h1><b><marquee>SELECT YOUR ROOM</marquee><b></h1>
	</center>
	<br>
		<?php
				 $sql = "SELECT * FROM `category` GROUP BY bed_name";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						?>
			
		
		</div>
		<?php
				}
			?>

		<div class="col-md-4 col_3">
		<a href="Booking.php?id=1<?php echo $row['bed_name']; ?>">
			<img src="images/one" class="img-responsive img1" alt=""/></a>
			<h2 class="size">SINGLE BED</h2>
		</div></div>

		<div class="col-md-4 col_3">
		<a href="Booking.php?id=2<?php echo $row['bed_name']; ?>">
			<img src="images/two" class="img-responsive img1" alt=""/></a>
			<h2 class="size">DOUBLE BED</h2>
		</div>

		<div class="col-md-4 col_3">
		<a href="Booking.php?id=3<?php echo $row['bed_name']; ?>">
			<img src="images/three" class="img-responsive img1" alt=""/>
			<h2 class="size">FAMILY ROOM</h2>
		</div></a></div>
			</table>
		
		<div class="clearfix"> </div>
	</div>
</div>



	
	<br><br><br><br>
<?php
	require_once('footer.php');
?>
