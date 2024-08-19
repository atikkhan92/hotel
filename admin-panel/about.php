<?php
require_once("connection.php");
require_once("header.php");
?>



<div class="center_content">  
    <div class="right_content"> 
    <h2>About Details</h2>
	 <table id="rounded-corner">
    <thead>
    	<tr>
        	
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Details</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
<tbody>
	       <?php
								

								$row=mysqli_query($conn,"select * from about");
								
								while($rs=mysqli_fetch_array($row))
								{   
									?>
															
									<tr>
            <td><?php echo $rs['name'];?></td>
			<td><?php echo $rs['detail'];?></td>
            <td><a href="aboutus_update.php?id=<?php echo $rs['id'];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="aboutus_delete.php?id=<?php echo $rs['id'];?>"class="ask"><img src="images/trash.png" alt="" title="" border="0" /></td>
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
	