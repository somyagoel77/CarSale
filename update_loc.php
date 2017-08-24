<?php
include("link.php");
$query="update location1 set loc='$_POST[new_loc]' where ID='$_POST[id]' ";
$result=mysqli_query($net,$query);
if(mysqli_affected_rows($net)>0)
{
	header("location:loc_view.php");
}


?>