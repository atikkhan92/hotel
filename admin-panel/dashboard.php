<?php
session_start();
require_once('connection.php');
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
    
          
    <div class="right_content">            
        
    <h2>Manage Bed</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th scope="col" class="rounded">Sr. No.</th>
			<th scope="col" class="rounded">Bed Name</th>
			  <th scope="col" class="rounded">View</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        
    <tbody>
	<?php
					$sql = "SELECT * FROM `category`";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{ 
						
						?>
    	<tr>
        	 <td><?php echo $i; ?></td>
			  <td><?php echo $row['bed_name'];?></td>
			  <td><a href="view-cat.php?id=<?php echo $row['bed_id'];?>"><img src="images/info.png" alt="" title="" border="0" /></a></td>
                        <td><a href="editcat.php?id=<?php echo $row['bed_id'];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="category_delete.php?id=<?php echo $row['bed_id'];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
         <?php
					 $i++;
					  }
					
					?>
                     
    	 
        
    	    
        
    </tbody>
</table>

	 <a href="addcat.php" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     
    
     
     
         
      
     
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