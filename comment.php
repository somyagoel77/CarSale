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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<div class = "table-responsive">
 			<table class = "table" width = "100%">
	<table border=1>
	<tr>
	<td>Name</td>
	<td>Contact</td>
	<td>Email</td>
	<td>subject</td>
	</tr>
	<?php
			include("link.php");
			$que="select v.manu_name,c.name,c.email,c.subject from vehicle v inner join comment c on c.car_id = v.v_id";
			$result=mysqli_query($net,$que);
			while($out=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$out[0]."</td>";
				echo "<td>".$out[1]."</td>";
				echo "<td>".$out[2]."</td>";
				echo "<td>".$out[3]."</td>";
				
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

