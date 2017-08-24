<?php
include("link.php");
$i=$_GET['a'];
$query="delete from category1 where ID='$i'";
$result=mysqli_query($net,$query);
if(mysqli_affected_rows($net)>0)
{
header("location:cat_view.php");



}


?>