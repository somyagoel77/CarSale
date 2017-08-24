<?php
include("link.php");
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];

$query="insert into Enquiry values(NULL,'$Name','$Email','$Subject')";
$result=mysqli_query($net,$query);

if($result)
{
 header("location:contact-post.html");
}


?>