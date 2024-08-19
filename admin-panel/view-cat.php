<?php
session_start();
$id=$_GET['id'];
require_once('connection.php');
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="right_content">            
        
    <h2>View Category</h2> 
                    
     <?php

$sql = "select * from category where bed_id=".$id;
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_array($result))
		{
		
		
		?>
     
     
         <div class="form">
         <form action="dashboard.php" method="post" class="niceform" >
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Bed Name:</label></dt>
                        <dd><input type="text" name="bed_name" id="" size="54" value="<?php echo $row['bed_name'];?>" disabled="disabled" /></dd>
                    </dl>
					
					
                      <dl class="submit">
					<a href="dashboard.php" class="bt">Back</a>
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