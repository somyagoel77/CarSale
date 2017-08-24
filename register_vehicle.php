<?php
include("session.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Blank</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>



</head>
<body>
<?php
include("header.php");



?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Blank</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				<div class="grid-form">
 		<div class="grid-form1">
 		<form  enctype="multipart/form-data" action="vehicle_reg.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Register Vehicle </label>
    <input type="text" name="manu_name" class="form-control" id="exampleInputEmail1"  placeholder="Manufacturer Name" required>
    <input type="text" name="cat" class="form-control" id="exampleInputEmail1"  placeholder="Category" required>
    <input type="number" name="b_price" class="form-control" id="exampleInputEmail1"  placeholder="Base Price" required>
    <input type="number" name="s_price" class="form-control" id="exampleInputEmail1"  placeholder="Selling Price" required>
    <input type="number" name="mileage" class="form-control" id="exampleInputEmail1"  placeholder="Mileage" required>
    <input type="number" name="a_year" class="form-control" id="exampleInputEmail1"  placeholder="Add year" required>
    <input type="number" name="reg_year" class="form-control" id="exampleInputEmail1"  placeholder="Registeration Year" required>
    <input type="number" name="insu_id" class="form-control" id="exampleInputEmail1"  placeholder="Insurance Id" required>
    <input type="number" name="gear" class="form-control" id="exampleInputEmail1"  placeholder="Gear" required>
    <input type="number" name="doors" class="form-control" id="exampleInputEmail1"  placeholder="Doors" required>
    <input type="number" name="seats" class="form-control" id="exampleInputEmail1"  placeholder="Seats" required>
    <input type="text" name="tank" class="form-control" id="exampleInputEmail1"  placeholder="Tank" required>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1"  required>
    <input type="text" name="color" class="form-control" id="exampleInputEmail1"  placeholder="Color" required>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value = "<?php echo $_SESSION['name'];  ?>"  placeholder="Email" readonly>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
				</div>
	       </div>
	

     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

