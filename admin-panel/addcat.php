<?php
session_start();
require_once('connection.php');
require_once('header.php');
?>
                    
                    
                    
                    
    <div class="center_content">  
    
          
    
    <div class="right_content">            
        
    <h2>Add New Category</h2> 
                    
     
     
     
         <div class="form">
         <form action="catexe.php" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
				<dl>
                        <dt><label for="email">Bed Name:</label></dt>
                        <dd><input type="text" name="bed_name" id="" size="54" /></dd>
                    </dl>
                    
					
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
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