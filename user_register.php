<?php
$con = mysqli_connect("localhost","root","","car_sale");
$query = "insert into user_register values 
(NULL,'$_POST[Name]','$_POST[email]','$_POST[pass]','$_POST[con]','$_POST[loc]','$_POST[address]')";
$result = mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0)
{
header("location:signin.html");	
	
	
}
else
{
header("location:signup.html");	
}


?>