<?php
session_start();
require_once ('headerlogin.php');
require_once ('connection.php');

?>

<div class="contact">
		<div class="container">
		
            <br><br>
			<div class="contact-bottom">
				<div class="col-md-12 ">
						<div class="add">
							<br>	
                     <?php
                            
                            $row=mysqli_query($conn,"select * from contact_us");
                            while($rs=mysqli_fetch_array($row))
				            {   	
				                echo "<center><h2><blink><u><font face='comic sans' size='10'>".$rs['name']."</font></blink><hr></h2></u></center>";
								echo "<center><h2><font face='comic sans' size='6'>Email:<b> ".$rs['email']."</font></p></h2></center><br></b>";
                                echo "<center><h2><font face='comic sans' size='6'>Telephone No:<b> ".$rs['phone']."</font></p></h2></center><br></b>";
                                echo "<center><h2><font face='comic sans' size='6'>Address:<b> ".$rs['address']."</font></p></h2></center></b>";
                            }
                        ?>					
						<br><br>
						<center><button type="back" tabindex="5" class="btn btn btn-lg btn-back" name="back"><a href = "index.php">BACK</a></button></center>
                        </div>
					</div>
						</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>



<br><br><br><br><br><br><br><br>