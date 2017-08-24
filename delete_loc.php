<?php
include("link.php");
$i=$_GET['a'];
$query="delete from location1 where ID='$i'";
$result=mysqli_query($net,$query);
if(mysqli_affected_rows($net)>0)
{
header("location:loc_view.php");



}


?>