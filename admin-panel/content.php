<?php
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
        
    
    <div class="right_content">            
        
    <h2>Edit Content</h2> 
                    
     <?php

$sql = "select * from `content` where id = '1'";
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_array($result))
		{
		
		?>
     
     
         <div class="form">
         <form action="contentupdate.php" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Welcome Title:</label></dt>
                        <dd><input type="text" name="welcome_title" id="" size="54" value="<?php echo $row['welcome_title'];?>" /></dd>
                    </dl>
                     <input type="hidden" name="id" value="1" />
					<dd>
				 <dl>
                 <dt><label for="email">Welcome Text:</label>	
            <dd><textarea name="welcome_text" id="welcome_text" rows="5" cols="36"><?php echo $row['welcome_text'];?></textarea></dd></dl>
			
						<dl><dt><label for="email">Phone No.:</label></dt>
                        <dd><input type="text" name="ph_number" id="" size="54" value="<?php echo $row['ph_number'];?>" /></dd></dl>
						
						<dl><dt><label for="email">Email:</label></dt>
                        <dd><input type="text" name="email" id="" size="54" value="<?php echo $row['email'];?>" /></dd></dl>
						
						<dl><dt><label for="email">Address</label></dt>
                        <dd><input type="text" name="address" id="" size="54" value="<?php echo $row['address'];?>" /></dd></dl>
						
          </dd>
                    
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