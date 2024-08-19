<?php
	$id=$_GET['id'];
	require_once('header.php');
?>
<div style="text-align:center; padding-top:20px;"></div>
<header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Rooms List</h1>
        </header>
	<div class="pad">
	<div class="container">
		<br>
	<table border="5" align="center">
			<tr >
				<th>Check Here <br/>to book</th>
				<th>Room No.</th>
				<th>Room Option</th>
				<th>Room status</th>
				<th>Room Price</th>
			</tr>
			<form action="bookseat.php" method="post" name="nm">
				<?php
					$sql = "SELECT * FROM `products` where  b_id=".$id;
				
					$result = mysqli_query($connection,$sql);
					$i = 1;
				    while($row = mysqli_fetch_array($result))
					{ 
				?>
				<tr>
				<td>
				<?php if($row['room_status'] == 'Available') { 
				$cls = '';
				?>
				<input type="checkbox" value="<?php echo $row['room_id'];?>" name="book[]"/>
				<?php } else { $cls = 'redc'; } ?>
				</td>
				<td><?php echo $row['room_number'];?></td>
				<td><?php echo $row['room_option'];?></td>
				<td class="<?php echo $cls; ?>"><?php echo $row['room_status'];?></td>
				<td><?php echo $row['room_price'];?></td>
				
			</tr>
					<?php	 
					   $i++;
					  }
					?>
					</table>
					<br />
					<div style="padding-top:20px; text-align:center;">
					CheckIn Date: <input type="date" min="<?php echo date("Y-m-d", strtotime("+ 1 day"));?>" name="in" required></input>&nbsp;&nbsp;&nbsp;
					CheckOut Date: <input type="date" min="<?php echo date("Y-m-d", strtotime("+ 1 day"));?>" name="out" required></input><br><br><br>
					Name: <input type="text" name="nms" required />
					Email: <input type="text" name="email"  required/>
					Phone: <input type="text" name="numbs"  required/><br><br>
					<input type="hidden" name="b_id" value="<?php echo $id;?>"  /><br>
					<button type="reset" class="btn btn-lg btn-danger" style="border-radius:0%">CANCLE</button>	&nbsp;&nbsp;
					<button type="book" class="btn btn-lg btn-success" style="border-radius:0%">BOOK</button> &nbsp;&nbsp;
					<button type="back" class="btn btn btn-lg btn-back" name="back" style="border-radius:0%"><a href = "indexbtn.php">BACK</a></button><br><br>
					<br><br><br><br>
					</div>
					</form>
		<div class="clearfix"> </div>
		</div>
	</div>
<br>


<?php
	require_once('footer.php');
?>