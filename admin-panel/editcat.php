<?php
session_start();
$id=$_GET['id'];
require_once('connection.php');
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
  
    
    <div class="right_content">            
        
    <h2>Edit Category</h2> 
                    
     <?php

 $CategoryQry = "SELECT * FROM category where bed_id='".$id."'";
		$CategoryResult = mysqli_query($connection,$CategoryQry) or die(mysqli_error());
		while($CategoryRow = mysqli_fetch_array($CategoryResult))
		{
		
		?>
     
     
         <div class="form">
         <form action="categoryupdate.php" method="post" class="niceform" enctype="">
         
                <fieldset>
				<dl>
                        <dt><label for="email">Bed Name:</label></dt>
                        <dd><input type="text" name="bed_name" id="" size="54" value="<?php echo $CategoryRow['bed_name'];?>" /></dd>
                    </dl>
                
                     <input type="hidden" name="bed_id" value="<?php echo $CategoryRow['bed_id'];?>" />
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