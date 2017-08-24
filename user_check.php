<?php
session_start();
include("link.php");
$query  = mysqli_query($net,"select * from user where name = '$_POST[name]' and password = '$_POST[password]'");
if(mysqli_num_rows($query)>0)
{
$_SESSION['name'] = $_POST['email'];	
header("location:index.php");	
	
	
}
else
{
header("location:signin.html");	
	
	
}	



?>