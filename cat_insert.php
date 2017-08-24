<?php
include("link.php");
$cat=$_POST['cat'];
$query="insert into category1 values(NULL,'$cat')";
$result=mysqli_query($net,$query);

if($result)
{
	header("location:cat_view.php");
	
}

?>