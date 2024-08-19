<?php
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


<div class="stock_box">
	 
	
<div style="text-align:center; padding-top:30px;">
 <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Gallery</h1>
        </header>

	 
	
	  <div class="col-md-12 sap_tabs">
	  <ul class="tab_img">
	       
						  <li><img src="images/hotel1.jpg" class="img-responsive" height="1200" width="900" alt=""/></a>
						     
						  </li>

						   <li><img src="images/room.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						   <li><img src="images/room1.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						   <li><img src="images/4bed.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						  <li><img src="images/bathroom.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						  <li><img src="images/balcony.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						  <li><img src="images/DSC_8510_0.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
							<li><img src="images/111.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						  <li><img src="images/delux.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						  <li><img src="images/gallary.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						  <li><img src="images/room2.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
						   <li><img src="images/87.jpg" class="img-responsive" alt=""/></a>
						     
						  </li>
		 <div class="clearfix"></div>
						</ul>
       </div>
       <div class="clearfix"> </div>
	   
    </div>
	
	
	
<?php
	require_once('footer.php');
?>