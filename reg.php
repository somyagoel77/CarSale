<?php
include("link.php");

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$subject=$_POST['subject'];

$query="insert into comment1 values(NULL,'$name','$email','$contact','$subject')";
$result=mysqli_query($net,$query);

if($result)
{
 header("location:index.php");
}




?>