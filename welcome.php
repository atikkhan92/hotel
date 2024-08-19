<?php
session_start();
include 'header.php';
include 'connection.php';
?>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
if(isset($_SESSION['user_email']))
{
    echo "<center><b><font face='comic sans' size='10'>REGISTRATION SUCCESFULLY<br>".$_SESSION['']."</font></b></center>";
    die();
}
else
{
    echo "<script language='javascript'>window.location.href='registration.php' </script>";
    
}
?>

  
    
<?php
include("footer.php");
?>

