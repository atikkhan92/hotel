<?php
session_start();
$id=$_GET['id'];
require_once('connection.php');
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
    
    
    <div class="right_content">            
        
    <h2>Edit Product</h2> 
                    
  <?php

$sql = "select * from products where room_id=".$id;
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_array($result))
		{
		
		
		?>
                        

         <div class="form">
         <form action="product-update.php" method="post" class="niceform" enctype="multipart/form-data">
        <fieldset>
        <dl>
          <dt>
            <label for="gender">Select categories:</label>
          </dt>
          <dd>
            <select size="1" name="bed_id" id="bed_id">
              <?php
					$kksql = "SELECT * FROM `category`";
					$kkresult = mysqli_query($connection,$kksql);
				    	while($kkrow = mysqli_fetch_array($kkresult))
						{ 
						
						?>
              <option value="<?php echo $kkrow['bed_id'];?>" <?php if($kkrow['bed_id'] == $kkrow['bed_id']) { echo 'selected="selected"'; } ?>><?php echo $kkrow['bed_name'];?></option>
              <?php
					
					  }
					
					?>
            </select>
          </dd>
        </dl>
       
        <dl>
		<input type="hidden" name="room_id" value="<?php echo $row['room_id'];?>" />
			
		<dl>
          <dt>
            <label for="email">Room No.:</label>
          </dt>
          <dd>
            <input type="text" name="room_number" value="<?php echo $row['room_number'];?>" id="" size="54" />
          </dd>
        </dl>
		<dl>
          <dt>
            <label for="email">Room Price:</label>
          </dt>
          <dd>
            <input type="text" name="room_price" value="<?php echo $row['room_price'];?>" id="" size="54" />
          </dd>
        </dl>
        <dl>
          <dt>
            <label for="gender">Room Option:</label>
          </dt>
          <dd>
            <select size="1" name="room_option" id="bed_id">
              <option value="NON AC" <?php if($row['room_status'] == 'NON AC' ) { echo 'selected="selected"'; } ?>>NON AC</option>
              <option value="AC" <?php if($row['room_status'] == 'AC' ) { echo 'selected="selected"'; } ?>>AC</option>
              <option value="LUXURY"<?php if($row['room_status'] == 'LUXURY' ) { echo 'selected="selected"'; } ?>>LUXURY</option>
              <option value="ROYAL SUITE"<?php if($row['room_status'] == 'ROYAL SUITE' ) { echo 'selected="selected"'; } ?>>ROYAL SUITE</option>
              <option value="KING SUTE"<?php if($row['room_status'] == 'KING SUITE' ) { echo 'selected="selected"'; } ?>>KING SUITE</option>
            </select>
          </dd>
        </dl>		
          
        </dl>
		<dl>
          <dt>
            <label for="gender">Room Status:</label>
          </dt>
          <dd>
            <select size="1" name="room_status" id="bed_id">
              
              <option value="Available" <?php if($row['s_status'] == 'Available' ) { echo 'selected="selected"'; } ?>>Available</option>
              <option value="Booked"  <?php if($row['s_status'] == 'Booked' ) { echo 'selected="selected"'; } ?>>Booked</option>
            </select>
          </dd>
        </dl>
		
        <dl class="submit">
          <input type="submit" name="submit" id="submit" value="Submit" />
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