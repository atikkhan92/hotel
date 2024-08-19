<?php
session_start();
require_once('connection.php');
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="right_content">            
        
    <h2>Manage Rooms</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	
            <th scope="col" class="rounded">Sr. No.</th>
            <th scope="col" class="rounded">Bed Name</th>
			 <th scope="col" class="rounded">Room No.</th>
			 <th scope="col" class="rounded">Room Option</th>
			 <th scope="col" class="rounded">Room Price</th>
			 <th scope="col" class="rounded">Room Status</th>
			  <th scope="col" class="rounded">View</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        
    <tbody>
	<?php
				 $sql = "SELECT * FROM `products`";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						 $cid = $row['b_id'];
					 $ksql = "SELECT * FROM `category` where bed_id = '$cid'";
						$kresult = mysqli_query($connection,$ksql);
					
						while($dsrrrow = mysqli_fetch_array($kresult))
						{ 
					
						
						?>
    	<tr>
        	<td><?php echo $i; ?></td>
            <td><?php echo $dsrrrow['bed_name'];?></td>
			<td><?php echo $row['room_number'];?></td>
			<td><?php echo $row['room_option'];?></td>
			<td><?php echo $row['room_price'];?></td>
			<td><?php echo $row['room_status'];?></td>
			<td><a href="view-prod.php?id=<?php echo $row['room_id'];?>"><img src="images/info.png" alt="" title="" border="0" /></a></td>
            <td><a href="editproduct.php?id=<?php echo $row['room_id'];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="product_delete.php?id=<?php echo $row['room_id'];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	  <?php
					
					
					   $i++;
					  }
					}
					?>
        
    	    
        
    </tbody>
</table>

	 <a href="addproduct.php" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     
    
     
     
         
      
     
     </div>
            
                    
  </div>                  
                    
                    
    
    
    <div class="clear"></div>
    </div> 
	
 <?php
	require_once('footer.php');
?>      
    

</div>		
</body>
</html>