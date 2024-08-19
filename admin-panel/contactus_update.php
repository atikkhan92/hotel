<?php	
include("connection.php");
include("header.php");
?>
<br><br><br>
    
<body>
<center>
<br>
<table class="responstable">

<?php 
		$id=$_GET["id"];
        $row=mysqli_query($conn,"select *from contact_us where id=$id");
        $rs=mysqli_fetch_array($row);

echo "<form action='contactus_update.php'?id=$rs[id]' method='POST'>";
echo "								
<tr>
<td>Name&nbsp;<td><input type='text' name='name' value='$rs[name]'/>
</tr><br>";

echo "								
<tr>
<td>Email&nbsp;<td><input type='email' name='email' value='$rs[email]' />
</tr><br>";
    
echo "								
<tr>
<td>Ph No&nbsp;<td><input type='text' name='phone' value=' $rs[phone]' />
</tr><br>";
    
echo "
<tr>
<td>Address&nbsp;<td><textarea rows='10' cols='50' name='address'> $rs[address] </textarea><br>
</tr>

<tr>
<td colspan='2'><input type='submit' name='submit' value='UPDATE' />
<input type='reset' value='CLEAR' />
</tr>
</form>
</table>";
?>

<?php
if(isset($_POST['submit']))
{
$id=$_GET["id"];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['address'];


	if($a!="" && $b!="" && $c!="" && $d!="")
	{

		$ans=mysqli_query($conn,"update contact_us set name='$a',email='$b',phone='$c',address='$d' where id='$id' ") or die("error");
		
		if($ans>0)
		{
			
			echo "<script language='javascript'>alert('Update Successfull!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='contactus.php' </script>";
		}
		else
		{
			echo "<script language='javascript'>alert('Some problem')
			</script>";
		}
	}
	else
	{
		echo "<script language='javascript'>alert('ENTER DETAILS..!!')
			</script>";
	}

}

?>
<?php
include("footer.php");
?>
