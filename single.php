<!DOCTYPE HTML>
<html>
<head>
<title> Single </title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
$query = "select * from vehicle where v_id = '$_GET[ID]'";
$result = mysqli_query($net,$query);
$out = mysqli_fetch_array($result);
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
						<h1>Car:-<?php echo strtoupper($out['manu_name']);  ?></h1>
						<h3>Selling Price:-&#8377;<?php echo strtoupper($out['s_price']);  ?></h3>	
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
        <td><?php echo $out['category']; ?></td>
        <td><?php echo $out['reg_year']; ?></td>
        <td><?php echo $out['gear']; ?>&<?php echo $out['doors']; ?></td>
        <td><?php echo $out['mileage']; ?></td>
        <td><?php echo $out['tank']; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
											</div><div class="clear"></div> 
					</div>

				<div class="clear"></div>
			   <div class="links">
		  				<ul>
		  					<li><a href="#"><img src="images/blog-icon1.png" title="date"><span>june 14, 2013</span></a></li>
		  					<li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
		  					<li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
		  					<li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
		  					<li><a href="#"><img src="images/blog-icon5.png" title="permalink"><span>permalink</span></a></li>
		  				</ul>
		  		</div>
		  		<div>
Comments
<div class="table-responsive">          
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Subject</th>
        

      </tr>
    </thead>

<?php
include("link.php");
$query = "select * from comment where car_id = '$_GET[val]'";
$result = mysqli_query($net,$query);
while($out = mysqli_fetch_array($result))
{

?>
		      <tbody>
      <tr>
        <td>1</td>
        <td><?php echo $out['name']; ?></td>
        <td><?php echo $out['email']; ?></td>
        <td><?php echo $out['contact']; ?></td>
        <td><?php echo $out['subject']; ?></td>
          </tr>
    </tbody>
 <?php } ?>
  </table>
  </div>

		  		</div>
			  		<div class="leave-comment"><a href="#" name="comment">Leave a Comment</a></div>
						<div class="comments-area">
							<form method = "post" action = "reg.php">
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="" name = "user">
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
									<textarea name = "sub"></textarea>
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
				<h3>Latest Tweets</h3>
				<p><label>@Lorem ipsum</label>dolor sit amet, consectetur adipisicing elit.</p>
				<span>10 minutes ago</span>
				<p><label>@consectetur</label>dolor sit amet, consectetur adipisicing elit.</p>
				<span>15 minutes ago</span>
			</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid center-grid">
				<h3>Recent posts</h3>
				<ul>
					<li><a href="#">eiusmod temporinc</a></li>
					<li><a href="#">adipisicing elit, sed</a></li>
					<li><a href="#">mod tempor incididunt</a></li>
					<li><a href="#">dipisicing elit, sed do</a></li>
					<li><a href="#">eiusmod temporinc</a></li>
				</ul>
			</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						          <li>About your Company Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
						     	  <li>Terms &amp; conditions Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
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
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
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

    	
    	
            