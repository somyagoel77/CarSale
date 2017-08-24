<!doctype html>

<head>
<title>vehicle Registeration</title>
<style>

#table
{
	background-color:#d2d2d2;
	height:700px;
	margin-top:px;
	padding-top:10px;
	padding-left:30px;}
#box
{
	height:600px;
	width:50%;
	
}
</style>
</head>


<body>
<div id="table">
	<table  id="box">
	<form method="post" enctype="multipart/form-data" action="vehicle_reg.php">
	<tr>
	<td>Manufacturer Name</td>
	<td><input type="text" name="manu_name" /></td>
	</tr>
	<tr>
	<td>Category</td>
	<td><input type="text" name="cat"/></td>
	</tr>
	<tr>
	<td>Base Price</td>
	<td><input type="number" name="b_price"/></td>
	</tr>
	<tr>
	<td>Selling Price</td>
	<td><input type="number" name="s_price"/></td>
	</tr>
	<tr>
	<td>Mileage</td>
	<td><input type="number" name="mileage"/></td>
	</tr>
	<tr>
	<td>Date</td>
	<td><input type="date" name="add_date"/></td>
	</tr>
	<tr>
	<td>Registeration Year</td>
	<td><input type="date" name="reg_year"/></td>
	</tr>
	<tr>
	<td>Insurance Id</td>
	<td><input type="number" name="insu_id"/></td>
	</tr>
	<tr>
	<td>Gear</td>
	<td><input type="number" name="gear"/></td>
	</tr>
	<tr>
	<td>Doors</td>
	<td><input type="number" name="doors"/></td>
	</tr>
	<tr>
	<td>Seats</td>
	<td><input type="number" name="seats"/></td>
	</tr>
	<tr>
	<td>Tank</td>
	<td><input type="text" name="tank"/></td>
	</tr>
	<tr>
	<td>Image</td>
	<td><input type="file" name="image"/></td>
	</tr>
	<tr>
	<td>Color</td>
	<td><input type="text" name="color"/></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="email" name="email"/></td>
	</tr>
	<tr>
	<td align="center"><input type="submit" /></td>
	</tr>

	</form>
</table>
</div>
</body>


</html>