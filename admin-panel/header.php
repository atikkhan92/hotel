<?php
@session_start();
require_once('connection.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL | Hotel President</title>
<link rel="stylesheet" type="text/css" href="style.css" /> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", 
	contentclass: "submenu", 
	revealtype: "click", 
	mouseoverdelay: 200, 
	collapseprev: true, 
	defaultexpanded: [], 
	onemustopen: false, 
	animatedefault: false, 
	persiststate: true, 
	toggleclass: ["", ""], 
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], 
	animatespeed: "fast", 
	oninit:function(headers, expandedindices){ 
		
	},
	onopenclose:function(header, index, state, isuseractivated){ 
		
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><h1><a href="content.php" style="text-decoration:blink;">Hotel President</a></h1></div>
    
    <div class="right_header">Welcome<?php echo $_SESSION['username']; ?>, <a href="../">Visit site</a>  | <a href="logout.php" class="logout">Logout</a></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a href="content.php">Admin Home</a></li>
					<li><a href="registration_details.php">Registration Details</a></li>
                    <li><a href="dashboard.php">Manage Bed</a></li>
                    <li><a href="product_listing.php">Manage Rooms</a></li>
					<li><a href="buylist.php">Booking Details</a></li>
					<li><a href="about.php">About Details</a></li>

                    </ul>
                    </div> 
                    
                    