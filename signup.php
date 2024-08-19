<?php
session_start();
require_once('headerlogin.php');
require_once('connection.php');

?>    

<br><br><br><br><br><br><br>
<div style="wrapper">

</div>
<div class="col-md-15 col_10">
<section id="contact-page">
        <div class="container">
            <div class="center"> 
              
              
         <center><h1><b><u>SIGN IN<b></u></h1></center>
            </div> 
            <br>
         
            <div class="row contact-wrap"> 
                <div class="col-sm-4 col-sm-offset-4">
      
                    <div id="errormessage"></div>
                    <form action="" method="POST" class="contactForm"> 
                        <div class="form-group">
                         Your Email : 
                            <input type="text" name="user_email" class="form-control" id="name" tabindex="1" autocomplete="off" placeholder="Email Address" required="" />
                            <div class="validation">
                            </div>
                        </div>
                        
                        <div class="form-group">  
                        Your Password :
                        <input type="password" name="user_password" class="form-control" id="pass" tabindex="2" autocomplete="off" placeholder="Password" required="" />
                            <div class="validation">
                            </div>
                        </div>
                        <br>      
                       <div><center>
                                 <button type="submit" tabindex="3" class="btn btn btn-lg" name="submit">SIGNUP</button>&nbsp;&nbsp;&nbsp;
                                 <button type="reset" tabindex="4" class="btn btn btn-lg" name="reset">CLEAR</button>&nbsp;&nbsp;&nbsp;
                                 <button type="back" tabindex="5" class="btn btn btn-lg btn-back" name="back"><a href = "registration.php">BACK</a></button></center>     
                      </div> 

                                
                                     <br>           

</div>
                                      </div>      
                                </div>
                                </form>
                        <br>                                              
                </div>
            </div>
        </div>
</div>
</div>
    </section>
  <?php  
if (isset($_POST['submit'])) 
{
  $name=$_POST['user_email'];
  $pass=$_POST['user_password'];

  $q="select * from registration where user_email='$name' && user_password='$pass'";
  
  $select=mysqli_query($conn,$q);
  $s=mysqli_fetch_row($select);
  if ($s>0) 
  {
    
    $_SESSION['user_email']=$name;
    $_SESSION['uno']=$s[0];
    $_SESSION['uname']=$s[1];
    $_SESSION['count']=null;
    echo "<script language='javascript'>window.location.href='indexmain.php'</script>";
  }
else
{
    echo '<script>alert("registration Not Successfully")</script>';
    
}
}

?>




