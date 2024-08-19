<?php
require_once("connection.php");
require_once("header.php");
if(isset($_SESSION['user_email']))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='registration.php'</script>";
}
?>
<div style="text-align:center; padding-top:30px;"></div>
 			<header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">About Us</h1>		
			</header>
			<br><br><br>


	
			<div class="container">
			<div class="about_box">
				
			
				<div class="col-md-11 about">
		  <?php
                            
                            $row=mysqli_query($conn,"select * from about");
                            while($rs=mysqli_fetch_array($row))
				            {   	
				                echo "<br><u><p> <font face='comic sans' size='10'>".$rs['name']."</font></u><p><hr>";
								echo "<b><p align='justify'><font face='comic sans' size='4'>".$rs['detail']."</font></b></p><hr>";		
				            }
                        ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br>

<?php
include("footer.php");
?>
