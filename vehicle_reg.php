<?php
include("link.php");

$manu_name=$_POST['manu_name'];
$cat=$_POST['cat'];
$b_price=$_POST['b_price'];
$s_price=$_POST['s_price'];
$mileage=$_POST['mileage'];
$a_year=$_POST['a_year'];
$reg_year=$_POST['reg_year'];
$insu_id=$_POST['insu_id'];
$gear=$_POST['gear'];
$doors=$_POST['doors'];
$seats=$_POST['seats'];
$tank=$_POST['tank'];
$color=$_POST['color'];
$email=$_POST['email'];


$imagen=$_FILES['image']['name'];
$imaget=$_FILES['image']['type'];
$images=$_FILES['image']['size'];
$imagev=$_FILES['image']['tmp_name'];

move_uploaded_file($imagev,'image/'.$n);
$check=move_uploaded_file($imagev,'image/'.$imagen);

$query="insert into vehicle values(NULL,'$manu_name','$cat','$b_price','$s_price','$mileage','$a_year','$reg_year','$insu_id','$gear','$doors','$seats','$tank','$imagen','$color','$email')";
$result=mysqli_query($net,$query);

if($result)
{
	header("location:vehicles_view.php");
}


?>