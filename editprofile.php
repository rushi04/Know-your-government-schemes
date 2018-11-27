<?php
session_start();
if($_SESSION['logged_in'])
{
echo'
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Edit Profile</title>
  <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans:600">
      <link rel="stylesheet" href="signup/x.css">

      <link rel="icon" type="image/x-icon" href="images//favicon.ico" />

    	<!-- For iPhone 4 Retina display: -->
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
    	<!-- For iPad: -->
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
    	<!-- For iPhone: -->
    	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">

    	<!-- Library - Bootstrap v3.3.5 -->
        <link rel="stylesheet" type="text/css" href="libraries/lib.css">
    	<link rel="stylesheet" type="text/css" href="libraries/Stroke-Gap-Icon/stroke-gap-icon.css">

    	<!-- Fonts -->
    	<link href="https://fonts.googleapis.com/css?family=Roboto:400,900,300,300italic,500,700" rel="stylesheet" type="text/css">
    	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">

      <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet" type="text/css">

    	<!-- Custom - Common CSS -->
    	<link rel="stylesheet" type="text/css" href="css/plugins.css">
    	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">

    	<!-- Custom - Theme CSS -->
    	<link rel="stylesheet" type="text/css" href="style.css">
    	<link rel="stylesheet" type="text/css" href="css/shortcode.css">


</head>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

  <!-- Header -->
	<header class="header-main container-fluid no-padding">
		<!-- Top Header -->
		<div class="top-header container-fluid no-padding">
			<div class="container">
				<div class="topheader-left">
					<a href="tel:+5198759822" title="5198759822"><i class="fa fa-mobile" aria-hidden="true"></i>(519) - 875 - 9822 </a>
					<a href="mailto:Support@info.com" title="Support@info.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>Emailus: Support@info.com</a>
				</div>
				<div class="topheader-right">
          <a href="checkprofile.php" title="Profile"><i class="fa fa-sign-out" aria-hidden="true"></i>'.$_SESSION["username"].'</a>
					<a href="logout.php" title="Logout">Logout</a>
				</div>
			</div>
		</div><!-- Top Header /- -->

    <!-- Menu Block -->
		<div class="menu-block container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Navigation -->
					<nav class="navbar ow-navigation">
						<div class="col-md-3">
							<div class="navbar-header">
								<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a title="Logo" href="index.php" class="navbar-brand"><img src="images/logo.png" alt="logo"/>GOVERNMENT SCHEMES<span>Choose Best Options</span></a>
								<a href="index.php" class="mobile-logo" title="Logo"><h3>GOVERNMENT SCHEMES</h3></a>
							</div>
						</div>
						<div class="col-md-9">
							<div class="navbar-collapse collapse" id="navbar">
								<ul class="nav navbar-nav menubar">
									<li class="dropdown">
										<a aria-expanded="false" aria-haspopup="true" href="index.php" role="button" class="dropdown-toggle" title="Home">Home</a>
										<i class="ddl-switch fa fa-angle-down"></i>

									</li>
									<li class="dropdown active">
										<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Schemes" >Schemes</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<ul class="dropdown-menu">
                      <li><a title="Agricultural" href="agriculture.php">Agricultural Scheme</a></li>
											<li><a title="Scholarships" href="scholarships.php">Scholarships</a></li>
											<li><a title="Womens and Child" href="womens.php">Womens and Child</a></li>
										</ul>
									</li>
									<li><a title="Our Functionality" href="events-page.php">Our Functionality</a></li>
									<li><a title="About" href="about-page.html">About</a></li>


								</ul>
							</div>
						</div>
					</nav><!-- Navigation /- -->
					<div class="menu-search">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
								<button class="sb-search-submit"><i class="fa fa-search"></i></button>
								<span class="sb-icon-search"></span>
							</form>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header /- -->
  <div class="login-html">
      <div class="login-wrap" style = "padding:30px;height:840px;">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" style=" margin-bottom: 40px"; class="tab">Complete Your Profile</label>
    <div class="login-form">
      <form class="sign-in-htm" action="checkeditprofile.php" method="POST">
        <div class="group">
          <label for="firstname" class="label">FirstName</label>
          <input id="firstname" style="border-style: groove"; name="firstname" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="lastname" class="label">LastName</label>
          <input id="lastname" style="border-style: groove;" name="lastname" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="country" class="label">Nationality</label>
          <input id="country" style="border-style: groove;" name="country" type="text" class="input" required>
        </div>

        <div class="group">
          <label for="statename" class="label">State</label>
          <input id="statename" style="border-style: groove"; name="statename" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="castename" class="label">Quota</label>
          <input id="castename" style="border-style: groove"; name="castename" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="religioncode" class="label">Religion</label>
          <input id="religioncode" style="border-style: groove"; name="religioncode" type="text" class="input" required>
        </div>
        <div class="group" style="padding-top: 10px;";>
          <input type="submit" name = "submit" class="button" style="padding-top: 20px"; value="Submit">
        </div>
        <div class="hr" style="
    margin-bottom: 10px;color:black;
    margin-top: 10px;
"></div>
        </form>
    </div>
  </div>
</div>

<!-- Footer Main -->
<footer class="footer-main container-fluid no-padding"  style="margin-top:1050px;">
<!-- Container -->
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <aside class="ftr-widget about_widget">
        <a class="footer-logo" href="#" title="Logo"><img alt="logo" src="images/logo.png">GOVERNMENT SCHEMES<span>Choose Best Options</span></a>
        <!--<ul>
          <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#" title="Rss"><i class="fa fa-rss"></i></a></li>
        </ul>-->
      <!--<p>Trem ipsum dolor sit ameThese men promptly escaped from maximum security astockade to the Los Angeles underground. These Happy Days are yours and mine Happy Days elites consectetur adipiscing elit, sed do eiusmod tempor incididunt utiles labore et dolor hates magna ali qua.</p>-->
      </aside>
    </div>
    <div class="col-md-6 col-sm-6">
      <aside class="ftr-widget newsletter_widget">
        <h3 class="widget-title">News Letters</h3>
         <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter your email">
          <span class="input-group-btn"><button class="btn" type="button" title="Sign In">Sign In</button></span>
        </div>
      </aside>
    </div>
    <!--<div class="col-md-6 col-sm-6">
      <aside class="ftr-widget upcomingevent_widget">
        <h3 class="widget-title">Up Comming Events</h3>
        <div id="upcomingevent_carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="upcoming-eventbox">
                <p>These men promptly escaped from maximum security stockade to the Los Angeles underground.</p>
                <ul>
                  <li><a href="#" title="Time"><i class="fa fa-clock-o" aria-hidden="true"></i>8:00 Am - 5:00 Pm</a></li>
                  <li><a href="#" title="Date"><i class="fa fa-calendar" aria-hidden="true"></i>01 May 2016</a></li>
                  <li><a href="#" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i>London, UK</a></li>
                </ul>
                <a href="#" title="Read More">Read More</a>
              </div>
            </div>
            <div class="item">
              <div class="upcoming-eventbox">
                <p>These men promptly escaped from maximum security stockade to the Los Angeles underground.</p>
                <ul>
                  <li><a href="#" title="Time"><i class="fa fa-clock-o" aria-hidden="true"></i>9:00 Am - 10:00 Pm</a></li>
                  <li><a href="#" title="Date"><i class="fa fa-calendar" aria-hidden="true"></i>05 May 2016</a></li>
                  <li><a href="#" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i>London, UK</a></li>
                </ul>
                <a href="#" title="Read More">Read More</a>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#upcomingevent_carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right carousel-control" href="#upcomingevent_carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>

      </aside>
    </div>-->
    <!--<div class="col-md-6 col-sm-6">
      <aside class="ftr-widget flickr_widget">
        <h3 class="widget-title">Our Flicker</h3>
        <ul>
          <li><a href="#" title="Flickr"><img src="images/flickr1.jpg" alt="flickr1" width="85" height="83"/></a></li>
          <li><a href="#" title="Flickr"><img src="images/flickr2.jpg" alt="flickr2" width="85" height="83"/></a></li>
          <li><a href="#" title="Flickr"><img src="images/flickr3.jpg" alt="flickr3" width="85" height="83"/></a></li>
          <li><a href="#" title="Flickr"><img src="images/flickr4.jpg" alt="flickr4" width="85" height="83"/></a></li>
          <li><a href="#" title="Flickr"><img src="images/flickr5.jpg" alt="flickr5" width="85" height="83"/></a></li>
          <li><a href="#" title="Flickr"><img src="images/flickr6.jpg" alt="flickr6" width="85" height="83"/></a></li>
        </ul>
      </aside>
    </div>-->
  </div>
  <!-- Footer Bottom -->
  <div class="footer-bottom col-md-12 col-sm-12 no-padding">
    <div class="copyright no-padding">
      <span>Copyright &copy; 2018. All Rights Reserved.</span>
    </div>
    <nav class="navbar ow-navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar2" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php" title="Home">Home</a></li>
          <!--<li><a href="courses-page.html" title="COURSE">Schemes</a></li>-->
          <li><a href="events-page.php" title="Events">Our Functionality</a></li>
          <!--<li><a href="blog-page.html" title="Blog">Blog</a></li>-->
          <li><a href="about-page.html" title="About">About</a></li>
        </ul>
      </div>
    </nav>
  </div><!-- Footer Bottom /- -->
</div><!-- Container /- -->
</footer><!-- Footer /- -->

<!-- JQuery v1.11.3 -->
<script src="js/jquery.min.js"></script>
<!--script src="js/jquery.knob.js"></script-->

<!-- Library - Js -->
<script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->
<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Library - Theme JS -->
<script src="js/functions.js"></script>


</body>
</html>';
}
else {
	{
		$_SESSION['message']="Please login first";
		echo "please login first";
	}
}
?>
