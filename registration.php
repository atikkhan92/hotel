<?php
session_start();
require_once ('headerlogin.php');
require_once ('connection.php');
?>
  <br><br>
  
<div class="col-md-15 col_10">
<section id="contact-page">
	
        <div class="container">
            <div class="center">   
                <br><br>
                <center><h1><b><u>REGISTRATION</u><b></h1></center>
            </div> 
            <br>
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
                    <div id="errormessage"></div>
                    <form action="" method="POST" role="form" class="contactForm">
                        <div class="form-group">
                        ENTER YOUR NAME<input type="text" name="user_name" class="form-control" id="name" tabindex="1" autocomplete="off" required="" placeholder="Your Name"  />
                            <div class="validation"></div>
                        </div>
                        ENTER YOUR EMAIL
                         <div class="form-group">
                          
                             <input type="email" class="form-control" name="user_email" id="uemail" tabindex="2" autocomplete="off" placeholder="Your Email" required="" />
                            <div class="validation"></div>
                        </div> 
                        ENTER YOUR PASSWORD
                        <div class="form-group">
                        <input type="password" name="user_password" class="form-control" id="pass" tabindex="3" autocomplete="off" placeholder="Password" required="" />
                            <div class="validation"></div>
                        </div>
                        ENTER YOUR CONTACT NUMBER 
                        <div class="form-group">
                              <input type="number" class="form-control" name="user_contect" id="uph" tabindex="4" autocomplete="off" placeholder="Phone Number" required="" />
                            <div class="validation"></div>
                        </div>
 
     
                        <br>

                               <div><center>
                               <button type="submit" class="btn btn btn-lg success" tabindex="5" name="submit">Registration</button>&nbsp;&nbsp;&nbsp;&nbsp;
                               <button type="reset" tabindex="6" class="btn btn btn-lg" name="reset">CLEAR</button>&nbsp;&nbsp;&nbsp;
                               <button type="back" tabindex="7" class="btn btn btn-lg btn-back" name="back"><a href = "index.php">BACK</a></button></center>
                               
                           </form>
                           <br>
                           <center><a href="signup.php">Do you have an account? Sign In here.</a></center>
                       </div>
                   </div>
               </div>

           </section>
          
          


<br>
<br><br><br><br>


<?php

if(isset($_POST['submit']))
{

@$user_name=$_POST["user_name"];
@$user_email=$_POST["user_email"];
@$user_password=$_POST["user_password"];
@$user_contect=$_POST["user_contect"];





    $query="insert into registration (user_name,user_email,user_password,user_contect) values('$user_name','$user_email','$user_password','$user_contect')";
    
    $ans=mysqli_query($conn,$query);
    
    if($ans>0)
    {
        $_SESSION['user_email']=$user_email;
        echo "<script>alert('Registration successfull')</script>";
        echo "<script language='javascript'>window.location.href='welcome.php'</script>";
    }
    else
    {
         echo "<script>alert('Registration Unsuccessfull')</script>";      
    }
}
?>

  
