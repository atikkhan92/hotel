<?php
session_start();
require_once ('header.php');
require_once ('connection.php');

?>
		<div style="text-align:center; padding-top:30px;"></div>
 			<header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Contact Us</h1>		
			</header>
<div class="contact">
		<div class="container">
		
            <br><br>
			<div class="contact-bottom">
				<div class="col-md-12 ">
						<div class="add">	
                     <?php
                            
                            $row=mysqli_query($conn,"select * from contact_us");
                            while($rs=mysqli_fetch_array($row))
				            {   	
				                echo "<center><h2><u><font face='comic sans' size='10'>".$rs['name']."</font><hr></h2></u></center>";
								echo "<center><h2><font face='comic sans' size='6'><b><u>Email:</u></b> ".$rs['email']."</font></p></h2></center><br>";
                                echo "<center><h2><font face='comic sans' size='6'><b><u>Telephone No:</u></b> ".$rs['phone']."</font></p></h2></center><br>";
                                echo "<center><h2><font face='comic sans' size='6'><b><u>Address:</u></b> ".$rs['address']."</font></p></h2></center>";
                            }
                        ?>					
						
                        
                        
                        </div>
					</div>
						</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>



<br><br><br><br><br><br><br><br>

  
    
<?php
include("footer.php");
?>

