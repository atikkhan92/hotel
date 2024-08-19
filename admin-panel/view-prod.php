<?php
session_start();
$id=$_GET['id'];
require_once('connection.php');
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="right_content">            
        
    <h2>View Product</h2> 
                    
  <?php

$sql = "select * from products where room_id=".$id;
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_array($result))
		{
		
		
		?>
                        

         <div class="form">
         <form action="#" method="post" class="niceform" enctype="multipart/form-data">
        <fieldset>
        
       <dl>
          <dt>
            <label for="gender">Bed Name:</label>
          </dt>
          <dd>
		   <?php
					 $kksql = "SELECT * FROM `category` where bed_id=".$row['b_id'];
					$kkresult = mysqli_query($connection,$kksql);
				    	while($kkrow = mysqli_fetch_array($kkresult))
						{ 
						
						?>
		   <input type="text" name="s_number" id="" size="54" value="<?php echo $kkrow['bed_name'];?>" disabled="disabled"  />
		   <?php
					
					  }
					
					?>
           
          </dd>
        </dl>
	   
	    <dl>
          <dt>
            <label for="email">Room Number:</label>
          </dt>
          <dd>
            <input type="text" name="s_number" id="" size="54" value="<?php echo $row['room_number'];?>" disabled="disabled"  />
          </dd>
        </dl>
		
		<dl>
          <dt>
            <label for="email">Room Option:</label>
          </dt>
          <dd>
            <input type="text" name="s_number" id="" size="54" value="<?php echo $row['room_option'];?>" disabled="disabled"  />
          </dd>
        </dl>
		
		<dl>
          <dt>
            <label for="email">Room Price:</label>
          </dt>
          <dd>
            <input type="text" name="s_number" id="" size="54" value="<?php echo $row['room_price'];?>" disabled="disabled"  />
          </dd>
        </dl>
		
		<dl>
          <dt>
            <label for="email">Room Status:</label>
          </dt>
          <dd>
            <input type="text" name="s_number" id="" size="54" value="<?php echo $row['room_status'];?>" disabled="disabled"  />
          </dd>
        </dl>
        
        
        <dl class="submit">
         <a href="product_listing.php" class="bt">Back</a>
        </dl>
        </fieldset>
      </form>
         </div>  
     <?php } ?>   
     
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