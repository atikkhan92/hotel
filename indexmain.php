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
	<br><br>
			    <h1><b><center><?php echo $row['welcome_title']; ?></b></center></h1>
				<br>
				<b><u><h1><p><?php echo $row['welcome_text']; ?></b></h1></u></p>
	<?php
		$i++;
		}
	?>
			 </div>
		</div>	
		<br><br><br>

		

		
	</div>
		<div class="clearfix"> </div>
	</div>
</div>



	
	<br><br>
<?php
	require_once('footer.php');
?>
