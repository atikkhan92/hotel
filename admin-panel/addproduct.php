<?php
session_start();
require_once('connection.php');
require_once('header.php');
?>

<div class="center_content">
  <div class="right_content">
    <h2>Add New Products</h2>
    <div class="form">
      <form action="product-exe.php" method="post" class="niceform" enctype="multipart/form-data">
        <fieldset>
        <dl>
          <dt>
            <label for="gender">Select Bed:</label>
          </dt>
          <dd>
            <select size="1" name="b_id" id="b_id">
              <?php
					$sql = "SELECT * FROM `category`";
					$result = mysqli_query($connection,$sql);
				    	while($row = mysqli_fetch_array($result))
						{ 
						
						?>
              <option value="<?php echo $row['bed_id'];?>"><?php echo $row['bed_name'];?></option>
              <?php
					
					  }
					
					?>
            </select>
          </dd>
        </dl>
        <dl>
          <dt>
            <label for="email">Room No.:</label>
          </dt>
          <dd>
            <input type="text" name="room_number" id="" size="54" />
          </dd>
        </dl>
		<dl>
          <dt>
            <label for="email">Room Price:</label>
          </dt>
          <dd>
            <input type="text" name="room_price" id="" size="54" />
          </dd>
        </dl>
        <dl>
          <dt>
            <label for="gender">Room Option:</label>
          </dt>
          <dd>
            <select size="1" name="room_option" id="bed_id">
              <option value="NON AC">NON AC</option>
              <option value="AC">AC</option>
              <option value="LUXURY">LUXURY</option>
              <option value="ROYAL SUITE">ROYAL SUITE</option>
              <option value="KING SUITE">KING SUITE</option>
            </select>
          </dd>
        </dl>
		
		<dl>
          <dt>
            <label for="gender">Room Status:</label>
          </dt>
          <dd>
            <select size="1" name="room_status" id="bed_id">
              <option value="Available" <?php if($row['room_status'] == 'Available' ) { echo 'selected="selected"'; } ?>>Available</option>
              <option value="Booked"  <?php if($row['Booked'] == 'Sitting' ) { echo 'selected="selected"'; } ?>>Booked</option>
            </select>
          </dd>
        </dl>
        <dl class="submit">
          <input type="submit" name="submit" id="submit" value="Submit" />
        </dl>
        </fieldset>
      </form>
    </div>
  </div>
  <!-- end of right content-->
</div>
<!--end of center content -->
<div class="clear"></div>
</div>
<!--end of main content-->
<?php
	require_once('footer.php');
?>
</div>
</body></html>