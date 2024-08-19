<?php
include("connection.php");
include("header.php");
?>

<div class="center_content">  
    <div class="right_content">            
    <h2>Contact Details</h2> 
    <table id="rounded-corner">
    <thead>
    	<tr>
			 <th scope="col" class="rounded">Name</th>
			 <th scope="col" class="rounded">E-mail</th>
			 <th scope="col" class="rounded">Phone</th>
			 <th scope="col" class="rounded">Address</th>
             <th scope="col" class="rounded">Edit</th>
             <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
    <tbody>


	       <?php
								

            $row=mysqli_query($conn,"select * from contact_us");

            while($rs=mysqli_fetch_array($row))
            {   
                ?>
                <tr>
            <td><?php echo $rs['name'];?></td>
			<td><?php echo $rs['email'];?></td>
			<td><?php echo $rs['phone'];?></td>
			<td><?php echo $rs['address'];?></td>
            <td><a href="contactus_update.php?id=<?php echo $rs['id'];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="contactus_delete.php?id=<?php echo $rs['id'];?>"class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>

                 
            
            
            <?php
                $i++;
        }
            ?>
            </tbody>
</table>

    </div>
<div class="clear"></div>
    </div> 
<?php
include("footer.php");
?>

    </div>
    </body>
    </html>
	