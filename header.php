<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php"><?php   
				include("link.php");
				$query=mysqli_query($net,"select * from user where name='$_SESSION[name]'");
				$result=mysqli_fetch_array($query);
					echo $result['name'];


			   ?></a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   <li>
                        <a href="register_vehicle.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Register Vehicles</span> </a>
                    </li>
          		
					<li>
                        <a href="vehicles_view.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">View Vehicles</span> </a>

          </li>
                        

          <li>
                        <a href="logout.php" class=" hvr-bounce-to-right"><i class="fa fa-briefcase nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                </ul>
            </div>
			</div>
        </nav>