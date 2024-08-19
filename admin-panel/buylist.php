<?php
session_start();
require_once('connection.php');
require_once('header.php');
$id=$_GET['id'];
?>
                    
                    
                    
                    
    <div class="center_content">        
    
    <div class="right_content">            
        
    <h2>Booked List</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
            <th scope="col" class="rounded">Sr. No</th>
            <th scope="col" class="rounded">Customer Name</th>
            <th scope="col" class="rounded">Customer Email</th>
			<th scope="col" class="rounded">Check in</th>
			<th scope="col" class="rounded">Check out</th>
            <th scope="col" class="rounded">Customer Number</th>
			<th scope="col" class="rounded">Bed Type</th>
			<th scope="col" class="rounded">Room Number</th>
			<th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        
    <tbody>
	<?php
					$sql = "SELECT * FROM `user`";
					$result = mysqli_query($connection,$sql);
					$i = 1;

					
				    	while($row = mysqli_fetch_array($result))
						{
					$cid = $row['buy_id'];
						 $ksql = "SELECT * FROM `category` where bed_id = '$cid'";
					$kresult = mysqli_query($connection,$ksql);
				    	while($krow = mysqli_fetch_array($kresult))
						{ 
						?>
    	<tr>
        	<td><?php echo $i; ?></td>
            <td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['in'];?></td>
			<td><?php echo $row['out'];?></td>
            <td><?php echo $row['phoneno'];?></td>
			<td><?php echo $krow['bed_name'];?></td>
			<td><?php echo $row['r_no'];?></td>
			<td><a href="buyer_delete.php?id=<?php echo $row['id'];?>"class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>

        </tr>
        
    	  <?php
		  			}
					   $i++;
					  
					}
					?>
        
    	    
        
    </tbody>
</table>
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