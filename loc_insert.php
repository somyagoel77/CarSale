<?php
include("link.php");
$loc=$_POST['loc'];
$query="insert into location1 values(NULL,'$loc')";
$result=mysqli_query($net,$query);

if($result)
{

	header("location:loc_view.php");
	
}

?>