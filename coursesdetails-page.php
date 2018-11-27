<?php
session_start();
include("login/db.php");
if($_SESSION['logged_in'])
{

	$sql = 'Select userid from logincredentials where username="'.$_SESSION['username'].'"';
	$result = $mysqli->query($sql);
	echo $mysqli->error;
	if($result)
	{//echo "here";
	if($row = $result->fetch_assoc())
	{
		$userid=$row['userid'];
	  $sqly='SELECT * from profiledetails where userid="'.$userid.'"';
		$result8 = $mysqli->query($sqly);
		if($row8=$result8->fetch_assoc())
		{
				$t=$row8['firstname'];
		}
		else{
			echo "r";
		}
		$sql2='SELECT scheme_id from eligiblefor where uid="'.$userid.'"';
		$result1=$mysqli->query($sql2);
		if($result1)
		echo " ";
		else {
			echo"fuck";
		}
	}
}

echo '
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>CourseDetail -Knowledge</title>
	<!-- Standard Favicon -->
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

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- LOADER -->
	<!--<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div>--><!-- Loader /- -->
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
				<a href="checkprofile.php" title="Profile"><i class="fa fa-sign-out" aria-hidden="true"></i>'.$_SESSION['username'].'</a>
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
								<a href="index.php" class="mobile-logo" title="Logo"><h3>User Profile</h3></a>
							</div>
						</div>
						<div class="col-md-9">
							<div class="navbar-collapse collapse" id="navbar">
								<ul class="nav navbar-nav menubar">
									<li class="dropdown active">
										<a aria-expanded="false" aria-haspopup="true" href="index.php" role="button" class="dropdown-toggle" title="Home">Home</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<!--<ul class="dropdown-menu">
											<li><a title="Home 2" href="home2.html">Home 2</a></li>
										</ul>-->
									</li>
									<li class="dropdown">
										<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Schemes"	>Schemes</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<ul class="dropdown-menu">
											<li><a title="Agricultural" href="agriculture.php">Agricultural Scheme</a></li>
											<li><a title="Scholarships" href="scholarships.php">Scholarships</a></li>
											<li><a title="Womens and Child" href="womens.php">Womens and Child</a></li>
										</ul>
									</li>
									<li><a title="Functionality" href="events-page.php">Our Functionality</a></li>
									<!--<li><a title="About" href="about-page.html">About</a></li>-->
									<!--<li class="dropdown">
										<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Blog" href="blog-page.html">Blog</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<ul class="dropdown-menu">
											<li><a title="Blog Post" href="blogpost-page.html">Blog Post</a></li>
										</ul>
									</li>-->
									<!--<li class="dropdown">
										<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Pages" href="#">Pages</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<ul class="dropdown-menu">
											<li><a title="Home 2" href="home2.html">Home 2</a></li>
											<li><a title="Course Detail" href="coursesdetails-page.php">Course Detail</a></li>
											<li><a title="BlogPost" href="blogpost-page.html">BlogPost</a></li>
										</ul>
									</li>-->
									<!--<li><a title="Contact" href="contactus-page.html">Contact</a></li>-->
								</ul>
							</div>
						</div>
					</nav><!-- Navigation /- -->
				<!--	<div class="menu-search">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
								<button class="sb-search-submit"><i class="fa fa-search"></i></button>
								<span class="sb-icon-search"></span>
							</form>
						</div>
					</div>-->
				</div>
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
	</header><!-- Header /- -->
	<!-- PageBanner -->
	<div class="container-fluid no-padding pagebanner">
		<div class="container">
			<div class="pagebanner-content">
				<h3>Hello '.$_SESSION['username'].'</h3>
				<!--<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Courses Details</li>
				</ol>-->
			</div>
		</div>
	</div><!-- PageBanner /- -->
	<div class="container coursesdetail-section">
		<div class="section-padding"></div>
			<div class="row">
				<div class="col-md-9 col-sm-8 event-contentarea">
					<div class="coursesdetail-block">
						<img src="images/photoslider2.jpg" alt="event-coursesdetail" width="860" height="500"/>
					<!--<div class="course-description">
							<h3 class="course-title">Courses Description</h3>
							<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit.</p>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi id est laborum et dolorum fuga.</p>
						</div>-->
					<!--	<div class="courses-summary">
							<h3 class="course-title">Courses summary</h3>
							<ul>
								<li><a href="#" title="Over 94 lectures and 6 hours">Over 94 lectures and 6 hours</a></li>
								<li><a href="#" title="Educated Staff">Educated Staff</a></li>
								<li><a href="#" title="To teach real programming skills">To teach real programming skills</a></li>
								<li><a href="#" title="Timesheets">Timesheets</a></li>
								<li><a href="#" title="Build a solid understanding">Build a solid understanding</a></li>
								<li><a href="#" title="Video Lessons">Video Lessons</a></li>
							</ul>
						</div>-->
						<div class="courses-curriculum">
							<h3 class="course-title">Eligible Schemes</h3>
							<div class="courses-sections-block">';
							$sqli='SELECT scheme_id from eligiblefor where uid="'.$userid.'"';
							$resulti=$mysqli->query($sqli);
							while($rowi = $resulti->fetch_assoc())
								{
									$sql='SELECT * from schemes where scheme_id="'.$rowi['scheme_id'].'"';
									$resultl=$mysqli->query($sql);
									while($rowl = $resultl->fetch_assoc())
										{
									echo '<div class="courses-lecture-box">
										<i class="fa fa-file-o" aria-hidden="true"></i>
										<span class="lecture-no">'.$rowl['scheme_id'].'</span>
										<a href="about-page.php"><span class="lecture-title">'.$rowl['scheme_name'].'</span></a>
										<span class="lecture-time">Eligible</span>
									</div>';
								}
							}
								echo '
						<!--		<div class="courses-lecture-box">
									<i class="fa fa-file-o" aria-hidden="true"></i>
									<span class="lecture-no">Lecture 1.2</span>
									<span class="lecture-title">Software Training</span>
									<span class="lecture-tag"><a href="#">Free</a></span>
									<span class="lecture-time">00:50:00</span>
								</div>-->
							</div>
							<!--<div class="courses-sections-block">
								<h3>Section 2: <span>Reference Material, Moodboards and Mind Mapping</span></h3>
								<div class="courses-lecture-box">
									<i class="fa fa-file-o" aria-hidden="true"></i>
									<span class="lecture-no">Lecture 2.1</span>
									<span class="lecture-title">Advanced Database Development</span>
									<span class="lecture-time">00:40:00</span>
								</div>
								<div class="courses-lecture-box">
									<i class="fa fa-file-o" aria-hidden="true"></i>
									<span class="lecture-no">Lecture 2.2</span>
									<span class="lecture-title">Multi Threading in Softwares</span>
									<span class="lecture-tag"><a href="#">Free</a></span>
									<span class="lecture-time">00:50:00</span>
								</div>
								<div class="courses-lecture-box">
									<i class="fa fa-file-o" aria-hidden="true"></i>
									<span class="lecture-no">Lecture 2.3</span>
									<span class="lecture-title">Creating Configurable Shapes Using Minxins</span>
									<span class="lecture-time">00:40:00</span>
								</div>
								<div class="courses-lecture-box">
									<i class="fa fa-file-o" aria-hidden="true"></i>
									<span class="lecture-no">Lecture 2.4</span>
									<span class="lecture-title">@import and Parent Reference</span>
									<span class="lecture-tag"><a href="#">Free</a></span>
									<span class="lecture-time">00:50:00</span>
								</div>
							</div>-->
						</div>
					<!--	<div class="courses-review">
							<h3 class="course-title">Courses Review</h3>
							<div class="reviewbox">
								<h3>Average Rating</h3>
								<div class="average-review">
									<h2>4.8</h2>
									<ul>
										<li><a href="#" title="1 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="2 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="3 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="4 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#" title="5 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
									<span>5 Rating</span>
								</div>
							</div>
							<div class="reviewbox">
								<h3>Detailed Rating</h3>
								<div class="detail-review">
									<ul>
										<li><a href="#" title="5 stars">5 stars</a><span>5</span></li>
										<li><a href="#" title="4 stars">4 stars</a><span>0</span></li>
										<li><a href="#" title="3 stars">3 stars</a><span>0</span></li>
										<li><a href="#" title="2 stars">2 stars</a><span>0</span></li>
										<li><a href="#" title="1 stars">1 stars</a><span>0</span></li>
									</ul>
								</div>
							</div>
						</div>-->
					</div>
				<!--	<nav class="ow-pagination">
						<ul class="pagination">
							<li><span class="arrow_left" aria-hidden="true"></span><a href="#" title="Political Science">Political Science</a></li>
							<li><a href="#" title="Micro Biology">Micro Biology</a><span class="arrow_right" aria-hidden="true"></span></li>
						</ul>
					</nav>-->
				</div>
				<div class="col-md-3 col-sm-4 event-sidebar">
				<div class="courses-features">
					<h3>Your Basic Details Are</h3>
						<!--<ul>
							<li><a href="#" title="1 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="2 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="3 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="4 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="5 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
						</ul>-->
						<div class="featuresbox"><img src="images/codepen-ic.png" alt="codepen-ic" width="22" height="22"/><h3>First Name : </h3><span>'.$row8['firstname'].'</span></div>
						<div class="featuresbox"><img src="images/dolar-ic.png" alt="dolar-ic" width="27" height="27"/><h3>Lastname : </h3><span>'.$row8['lastname'].'</span></div>
						<div class="featuresbox"><img src="images/clock-ic.png" alt="clock-ic" width="24" height="24"/><h3>Religion : </h3><span>'.$row8['religioncode'].'</span></div>
						<div class="featuresbox"><img src="images/cup-ic.png" alt="cup-ic" width="24" height="23"/><h3>Nationality : </h3><span>'.$row8['country'].'</span></div>
						<div class="featuresbox"><img src="images/user-ic.png" alt="user-ic" width="22" height="22"/><h3>State : </h3><span>'.$row8['statename'].'</span></div>
						<div class="featuresbox"><img src="images/cap-ic.png" alt="cap-ic" width="24" height="20"/><h3>Quota:</h3><span>'.$row8['castename'].'</span></div>
					</div>-->
			<!--		<div class="courses-staff">
						<img src="images/staff.jpg" alt="staff" width="275" height="288"/>
						<h3>Charlie Brown</h3>
						<span>Web Designer</span>
						<p>My name is Ruth. I grew up and studied in…</p>
					</div>-->
				</div>
			</div>
		<div class="section-padding"></div>
	</div>
	<!-- Footer Main -->
<footer class="footer-main container-fluid no-padding">
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
	<!--<script src="js/jquery.min.js"></script>-->
	<!--script src="js/jquery.knob.js"></script-->

	<!-- Library - Js -->
	<!--<script src="libraries/lib.js"></script>--><!-- Bootstrap JS File v3.3.5 -->
	<!-- Library - Google Map API -->
	<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>-->

	<!-- Library - Theme JS -->
	<!--<script src="js/functions.js"></script>-->
</body>
</html>';
}
?>
