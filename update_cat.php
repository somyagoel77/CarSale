<?php
include("link.php");
$query="update category1 set cat='$_POST[new_cat]' where ID='$_POST[id]' ";
$result=mysqli_query($net,$query);
if(mysqli_affected_rows($net)>0)
{
	header("location:cat_view.php");
}


?>