<!DOCTYPE HTML>
<html>
<head>
<title>Car Sale | Single </title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
<?php
include("header.php");
include("link.php");
$a = $_POST['s'];
$query = "select * from vehicle where MANUFACTURE_NAME like '%$a%'";
$result = mysqli_query($net,$query);
$out = mysqli_fetch_array($result);

if(!isset($_POST['s']))
{
 header("location:index.php");
}
?>
<div class="header-bottom">
	<div class="wrap">
		<div class="single">
				<div class="box_wrapper"><h1>Long Term Business</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
										<img src="car_user/image/<?php echo $out['image']  ?>" alt=""/>
									</div>
						</div>
					   </div>
					</div>
						<div class="grid span_2_of_3">
						<h1>Car:-<?php echo strtoupper($out['MANUFACTURE_NAME']);  ?></h1>
						<h3>Selling Price:-&#8377;<?php echo strtoupper($out['SELLING_PRICE']);  ?></h3>	
											  <div class="table-responsive">          
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Category</th>
        <th>Registeration Year</th>
        <th>Gears and Doors</th>
        <th>Mileage</th>
        <th>Tank</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><?php echo $out['CATEOGARY']; ?></td>
        <td><?php echo $out['REGISTRATION_YEAR']; ?></td>
        <td><?php echo $out['GEAR']; ?>&<?php echo $out['DOORS']; ?></td>
        <td><?php echo $out['MILEAGE']; ?></td>
        <td><?php echo $out['TANK'] ; ?> </td>
      </tr>
    </tbody>
  </table>
  </div>
									      </div><div class="clear"></div> 
					</div>

				<div class="clear"> </div>
			   
		  		
			  		<div class="leave-comment"><a href="#" name="comment">Leave a Comment</a></div>
						<div class="comments-area">
							<form method = "post" action = "reg.php">
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="" name = "name">
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="" name = "email">
								</p>
								<p>
									<label>Contact</label>
									<input type="text" value="" name = "contact">
								</p>
								<p>
									<label>Subject</label>
									<span>*</span>
									<textarea name = "subject"></textarea>
								</p>
									<input type="hidden" value="<?php echo $out['email'] ?>" name = "car_email">
							<input type="hidden" value="<?php echo $_GET['val']; ?>" name = "c_id">
						
								<p>
									<input type="submit" value="Post">
								</p>
							</form>
					</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="wrap">
	   <div class="footer-top">
				
				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						          <li>About your Company </li>
						     	  <li>Terms &amp; conditions </li>
						     </ul>
						</div>
				   </div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="call_info">
						<p class="txt_3">Call us toll free:</p>
						<p class="txt_4">1 800 234 23456</p>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						
						<p>+1 111-111-1111</p>
						<span>support(at)carssale.com</span>
					</div>
				</div>
				<div class="clear"></div>
		</div>
	</div>
</div>		

</body>
</html>

    	
    	
