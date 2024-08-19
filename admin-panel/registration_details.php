<?php
require_once("connection.php");
require_once("header.php");
?>



<div class="center_content">  
    <div class="right_content"> 
    <h2>Registration Details</h2>
	 <table id="rounded-corner">
    <thead>
    	<tr>
			<th scope="col" class="rounded">Id No.</th>
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">E-mails</th>
            <th scope="col" class="rounded">Phone</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
<tbody>
	       <?php
								

								$row=mysqli_query($conn,"select * from registration");
								$i = 1;
								while($rs=mysqli_fetch_array($row))
								{   
									?>
															
		<tr>
			<td><?php echo $i;?></td>
            <td><?php echo $rs['user_name'];?></td>
			<td><?php echo $rs['user_email'];?></td>
			<td><?php echo $rs['user_contect'];?></td>
            <td><a href="registration_delete.php?id=<?php echo $rs['id'];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	  <?php
					
					
					   $i++;
					  }
					?>
					</tbody>
</table>
					</div>

<div class="clear"></div>

<?php
require_once("footer.php");
?>
	