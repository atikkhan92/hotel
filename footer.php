<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
			<h3>Quick Links<div class="verticalLineTop"></div></h3>
				<ul>
					<li><a href="indexmain.php">Home</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
					<li><a href="about.php">About Us</a></li>
				</ul>
					
			</div>
			<div class="col-md-4 footer-left">
			<h3>Rooms<div class="verticalLineTop"></div></h3>
				<ul><?php
					$sql = "SELECT * FROM `category` ORDER BY bed_iD ASC LIMIT 0,3";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						 
						?>
					<li><a><?php echo $row['bed_name']; ?></a></li>


					 <?php
					
					 
					   $i++;
					  }
					
					?>
				</ul>
					
			</div>
			<div class="col-md-4 footer-middle">
				<h3>Contact Email<div class="verticalLineTop"></div></h3>
				<div class="address">
				<?php
				 $sql = "SELECT * FROM `content`";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						?>
				<div class="email">
					<p><a href="mailto:example@email.com">info@hotelpresidentgmail.com</a></p>
						</div>
			</div>
			
			<?php
				}
				?>
			<div class="clearfix"> </div>	
		</div>
	</div>
	<br><br>
	<div class="grid_3">
	  <div class="container hov">
         <p>Devloped by Parmar Nevil & Jimuliya Bansi. </p>
	  </div>	
