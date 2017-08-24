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
 			<table border=1>
	<table border=1>
	<tr>
	<td>manufacturer name</td>
	<td>category</td>
	<td>base price</td>
	<td>selling price</td>
	<td>mileage</td>
	<td>add date</td>
	<td>registeration year</td>
	<td>insurance id</td>
	<td>gear</td>
	<td>doors</td>
	<td>seats</td>
	<td>tank</td>
	<td>image</td>
	<td>color</td>
	<td>email</td>
	</tr>
	<?php
			include("link.php");
			$que="select * from vehicle where email='$_SESSION[name]'";
			$result=mysqli_query($net,$que);
			while($out=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$out[1]."</td>";
				echo "<td>".$out[2]."</td>";
				echo "<td>".$out[3]."</td>";
				echo "<td>".$out[4]."</td>";
				echo "<td>".$out[5]."</td>";	
				echo "<td>".$out[6]."</td>";
				echo "<td>".$out[7]."</td>";
				echo "<td>".$out[8]."</td>";
				echo "<td>".$out[9]."</td>";
				echo "<td>".$out[10]."</td>";
				echo "<td>".$out[11]."</td>";
				echo "<td>".$out[12]."</td>";
				echo "<td>"."<img src='image/".$out[13]."' height = '100px' width = '100px'>"."</td>";
				echo "<td>".$out[14]."</td>";
				echo "<td>".$out[15]."</td>";
				
				echo "</tr>";
			}
			
			
	?>
	</table>
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

