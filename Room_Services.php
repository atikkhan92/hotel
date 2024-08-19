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

<div style="text-align:center; padding-top:30px;">
 <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1"> Room Services </h1>
        </header>
	<div class="register">
	  <div class="container">
	  	
		
		<div class="col-md-3 col_4">
		<u><h2>Our service:-</h2></u>
	  	   <img src="images/rs" class="img-responsive img1" alt=""/>
	  	  </div>
	<div>
	<div style="text-align:center; padding-top:30px;">
	  		<h5><n>(1) Free WIFI/internet connectivity in Lobby/reception area.</n></h5>
			<h5><n>(2) 24 hours rooms service.</n><h5>
			<h5><n>(3) LCD T.V. with satellite channels.</n><h5>
			<h5><n>(4) Currency Exchange.</n><h5>
			<h5><n>(5) Same Day Laundry.</n><h5>
			<h5><n>(6) Left Luggage Facility.</n><h5>
			<h5><n>(7) Courtesy coach service on request.</n><h5>
			<h5><n>(8) All major credit/debit cards accepted.</n><h5>
			<h5><n>(9) Wheelchair on request,Banquet,Conference Room[Capacity upto 40 persons].</n><h5>
			<h5><n>(10)Terrace Garden.</n><h5>
</div>
</div>


	  	  <div class="clearfix"> </div>
		</div>
</div>
</div>
		  
	

<?php
	require_once('footer.php');
?>