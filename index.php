<?php
session_start();
	require_once('connection.php');
	require_once('headermain.php');?>
	

<div class="banner">
		<div class="container">
			
		</div>
	</div>
	
	<div class="index-about" style="margin-top:50px;">
	<div class="container">
	<?php
		$sql = "SELECT * FROM `content`";
		$result = mysqli_query($connection,$sql);
		$i = 1;
		while($row = mysqli_fetch_array($result))
		{
	?>
	<br><br><br>
			    <h1><b><center><marquee><?php echo $row['welcome_title']; ?></b></marquee></center></h1>
				<br>
				<b><u><h1><p><?php echo $row['welcome_text']; ?></b></h1></u></p>
	<?php
		$i++;
		}
	?>
			 </div>
		</div>	
		<br><br>

		

		
	</div>
		<div class="clearfix"> </div>
	</div>
</div>



	
	<br><br>
<?php
	require_once('footermain.php');
?>
