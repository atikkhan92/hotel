<?php
session_start();
include("connection.php");
include("header.php");
if(isset($_SESSION['user_email']))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='registration.php'</script>";
}
?>


  
			<div style="text-align:center; padding-top:30px;">
 <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Profile Details</h1>
        </header>
    

            </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
					<?php
					if(isset($_REQUEST['msg']))
					{
						echo $_REQUEST['msg'];
					}
					?>                    
					<div style="font-size: 25px;" class="contact">
						<?php
						$q="select * from registration where user_email='".$_SESSION['user_email']."'";
						$r=mysqli_query($conn,$q) or die("error");
						$c=mysqli_num_rows($r);
						if($c>=1)
						{
							$row=mysqli_fetch_array($r);
						}
						?>
						<div table><center>
						<label>NAME :-&nbsp;<?php echo $row[1];?></label><br><br>
						<label>MOBILE NO. :-&nbsp;<?php echo $row[4];?></label><br><br>
						<label>E-MAIL :-&nbsp;<?php echo $row[2];?></label><br><br>	</center>											
					</div>
					</div>
                    <div id="errormessage" style="height:100px; "></div>

                </div>
            </div>
        </div>
    </section>
    

<?php
include("footer.php");
?>