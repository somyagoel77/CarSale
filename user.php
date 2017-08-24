<?php
include("link.php");
$name=$_POST['name'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$location=$_POST['location'];



$query="insert into user values(NULL,'$name','$password','$contact','$email','$location')";
$result=mysqli_query($net,$query);

if($result)
{
	header("location:signin.html");
}


?>