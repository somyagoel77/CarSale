<?php
session_start();
include("link.php");
$query = mysqli_query($net,"select * from user where name= '$_POST[name]' and password = '$_POST[password]'");
if(mysqli_affected_rows($net)>0)
{
header("location:index.php");
$_SESSION['name']=$_POST['name'];
}
else
{
	header("location:signin.html");
}

?>