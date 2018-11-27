<?php
session_start();
if($_SESSION['logged_in'])
{
echo'
﻿<!DOCTYPE html>
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
	<title>Home -Knowledge</title>
	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images//favicon.ico"/>

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
	<!--
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div>-->
	<!-- Loader /- -->
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
					<a href="checkprofile.php" title="Profile"><i class="fa fa-sign-out" aria-hidden="true"></i>admin</a>
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
									<li class="dropdown active">
										<a aria-expanded="false" aria-haspopup="true" href="admin_index.php" role="button" class="dropdown-toggle" title="Home">Home</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<!--<ul class="dropdown-menu">
											<li><a title="Home 2" href="home2.html">Home 2</a></li>
										</ul>-->
									</li>
									<li class="dropdown">
										<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Schemes"	>Edit Schemes</a>
										<i class="ddl-switch fa fa-angle-down"></i>
										<ul class="dropdown-menu">
											<li><a title="Agricultural" href="add.html">Add Scheme</a></li>
											<li><a title="Scholarships" href="update.html">Update Scheme</a></li>
											<li><a title="Womens and Child" href="delete.html">Delete Scheme</a></li>
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
	<!-- PhotoSlider Section -->
	<div class="photoslider-section container-fluid no-padding">
		<div id="home-slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/photoslider1.jpg" alt="photoslider1" style="width:1700px; height:720px;"/>
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6 col-sm-8 col-xs-8 ow-pull-right no-padding">
								<!--<h4 data-animation="animated bounceInLeft">Welcome</h4>
								<h3 data-animation="animated fadeInDown">To Our<span>University</span></h3>
								<p data-animation="animated bounceInRight">We belive nothing is more important than education. The best learning institution</p>
								<a href="#" title="Learn More" data-animation="animated zoomInUp">Learn More</a>-->
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/photoslider2.jpg" alt="photoslider2" width="1920" height="801"/>
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6 col-sm-8 col-xs-8 ow-pull-left no-padding">
								<!--<h4 data-animation="animated bounceInLeft">Welcome</h4>
								<h3 data-animation="animated fadeInDown">To Our<span>University</span></h3>
								<p data-animation="animated bounceInRight">We belive nothing is more important than education. The best learning institution</p>
								<a href="#" title="Learn More" data-animation="animated zoomInUp">Learn More</a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div><!-- PhotoSlider Section /- -->
	<!-- Welcome Section -->
	<div class="container welcome-section">
		<div class="section-padding"></div>
		<div class="section-header">
			<h3>Popular <span>Schemes</span></h3>
			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="welcome-box">
					<img src="images/welcomeagriculture.jpg" alt="welcome1"  style="width:390px; height:380px;"/>
					<div class="welcome-title">
						<h3><a href="agriculture.php" title="Agriculture">Agriculture</a></h3>
					</div>
					<!--<div class="welcome-content">
						<span>(Peter Parker)</span>
						<p>Then one day he was shootinsome  When the against him bubblin</p>
						<ul class="course-detail">
							<li><i class="fa fa-calendar" aria-hidden="true"></i>Course duration : <span>3 Yr</span></li>
							<li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Degree Level : <span>Master’s Degree</span></li>
						</ul>
						<ul class="course-rating">
							<li><a href="#" title="1 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="2 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="3 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="4 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="5 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
						</ul>
						<a href="coursesdetails-page.php" title="Apply now">Apply now</a>
					</div>-->
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="welcome-box">
					<img src="images/welcomescholarship.jpg" alt="welcome2" style="width:390px; height:380px;"/>
					<div class="welcome-title">
						<h3><a href="scholarships.php" title="Student Scholarsh">Student Scholarships</a></h3>
					</div>
					<!--<div class="welcome-content">
						<span>(Peter Parker)</span>
						<p>Then one day he was shootinsome  When the against him bubblin</p>
						<ul class="course-detail">
							<li><i class="fa fa-calendar" aria-hidden="true"></i>Course duration : <span>3 Yr</span></li>
							<li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Degree Level : <span>Master’s Degree</span></li>
						</ul>
						<ul class="course-rating">
							<li><a href="#" title="1 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="2 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="3 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="4 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="5 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
						</ul>
						<a href="coursesdetails-page.php" title="Apply now">Apply now</a>
					</div>-->
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="welcome-box">
					<img src="images/welcomewomen.jpg" alt="welcome3" style="width:390px; height:380px;"/>
					<div class="welcome-title">
						<h3><a href="womens.php" title="Women and Child Development">Women and Child Development</a></h3>
					</div>
					<!--<div class="welcome-content">
						<span>(Peter Parker)</span>
						<p>Then one day he was shootinsome  When the against him bubblin</p>
						<ul class="course-detail">
							<li><i class="fa fa-calendar" aria-hidden="true"></i>Course duration : <span>3 Yr</span></li>
							<li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Degree Level : <span>Master’s Degree</span></li>
						</ul>
						<ul class="course-rating">
							<li><a href="#" title="1 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="2 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="3 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="4 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="5 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
						</ul>
						<a href="coursesdetails-page.php" title="Apply now">Apply now</a>
					</div>-->
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- Welcome Section /- -->

	<!-- Parallax Section -->
	<!--<div class="container-fluid no-padding parallax-section">
		<div class="parallax-carousel">
			<div class="parallax-block">
				<div class="parallax-box">
					<img src="images/parallax-bg.jpg" alt="parallax" width="1920" height="600"/>
				</div>
				<div class="parallax-content">
					<h3>Find Perfect Schemes</h3>
					<h3>and <span>Good Result</span></h3>
					<p>World Largest books and library center is here where you can study the latest trends of the education. Curabitur rutrum faucibus elitconvallis diam mattis eget. Nullam vulputate nibh at nisi consectetur.</p>
					<a href="#" title="Find More About Us">Find More About Us</a>
					<ul>
						<li><img src="images/parallax-thumb1.jpg" alt="parallax-thumb1" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb2.jpg" alt="parallax-thumb2" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb3.jpg" alt="parallax-thumb3" width="100" height="80"/></li>
					</ul>
				</div>
			</div>
			<div class="parallax-block">
				<div class="parallax-box">
					<img src="images/parallax-bg.jpg" alt="parallax" width="1920" height="600"/>
				</div>
				<div class="parallax-content">
					<h3>Learn Online</h3>
					<h3>Only patience & persistence give <span>Good Result 2</span></h3>
					<p>World Largest books and library center is here where you can study the latest trends of the education. Curabitur rutrum faucibus elitconvallis diam mattis eget. Nullam vulputate nibh at nisi consectetur.</p>
					<a href="#" title="Find More About Us">Find More About Us</a>
					<ul>
						<li><img src="images/parallax-thumb1.jpg" alt="parallax-thumb1" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb2.jpg" alt="parallax-thumb2" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb3.jpg" alt="parallax-thumb3" width="100" height="80"/></li>
					</ul>
				</div>
			</div>
			<div class="parallax-block">
				<div class="parallax-box">
					<img src="images/parallax-bg.jpg" alt="parallax" width="1920" height="600"/>
				</div>
				<div class="parallax-content">
					<h3>Learn Courses</h3>
					<h3>Only patience & persistence give <span>Good Result 3</span></h3>
					<p>World Largest books and library center is here where you can study the latest trends of the education. Curabitur rutrum faucibus elitconvallis diam mattis eget. Nullam vulputate nibh at nisi consectetur.</p>
					<a href="#" title="Find More About Us">Find More About Us</a>
					<ul>
						<li><img src="images/parallax-thumb1.jpg" alt="parallax-thumb1" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb2.jpg" alt="parallax-thumb2" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb3.jpg" alt="parallax-thumb3" width="100" height="80"/></li>
					</ul>
				</div>
			</div>
			<div class="parallax-block">
				<div class="parallax-box">
					<img src="images/parallax-bg.jpg" alt="parallax" width="1920" height="600"/>
				</div>
				<div class="parallax-content">
					<h3>Learn Online Courses</h3>
					<h3>Only patience & persistence give <span>Good Result 4</span></h3>
					<p>World Largest books and library center is here where you can study the latest trends of the education. Curabitur rutrum faucibus elitconvallis diam mattis eget. Nullam vulputate nibh at nisi consectetur.</p>
					<a href="#" title="Find More About Us">Find More About Us</a>
					<ul>
						<li><img src="images/parallax-thumb1.jpg" alt="parallax-thumb1" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb2.jpg" alt="parallax-thumb2" width="100" height="80"/></li>
						<li><img src="images/parallax-thumb3.jpg" alt="parallax-thumb3" width="100" height="80"/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>--><!-- Parallax Section /- -->

<!-- Search Courses -->
<div class=""
style="background:#f7c51d;">
	<div class="container">
		<div class="search-content">
			<div class="searchcourses-block">
				<h3>Over 250+ Scheme Details can be seen through this Platform</h3>
			</div>
				<form action="searchschemes.php"; method="POST">
			<div class="course-search-block">
				<div class="col-md-3 col-sm-3 col-xs-6">

					<select class="selectpicker" name="category">
						<option>Categories</option>
						<option>Agriculture</option>
						<option>Scholarships</option>
						<option>Women and Child Development</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<select class="selectpicker" name="type1">
						<option>Scheme Type</option>
						<option>Central Level</option>
						<option>State Level</option>
					</select>
				</div>
				<div class="col-md-6 col-sm-6  col-xs-12 search_box">
					<div class="input-group">
						<input type="text" class="form-control" name="keyword" placeholder="Scheme Keyword. . . ">
						<span class="input-group-btn">

							<button class="btn" type="submit" title="Search courses">Search Schemes</button>
						</span>
					</div>
				</div>
				</form>
			</div>
			<!--<div class="search-categories">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<p><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Over 500 students Enrolled Learn Skills</span></p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<p><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span>More than 300+ Online Courses Available</span></p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<p><i class="fa fa-tencent-weibo" aria-hidden="true"></i><span>Learn Skills on any Devices anytime</span></p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<p><i class="fa fa-user-md" aria-hidden="true"></i><span>More than 320 Instructors Available</span></p>
				</div>
			</div>-->
		</div>
	</div>
</div><!-- Search Courses /- -->
	<!-- Event Section -->
	<div class="container event-section">
		<div class="section-padding"></div>
		<div class="section-header-block">
			<div class="section-header">
				<h3>Our <span>Functionality</span></h3>
				<p>Details of Every Scheme at one Click!<p>
			</div>
			<a href="events-page.php" title="View All">View All</a>
		</div>
		<div class="event-block">
			<div class="event-box">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-5">
						<img src="images/knowgovernment.png" alt="event1" style="width:260px; height:200px;"/>
					</div>
					<div class="col-md-7 col-sm-6 col-xs-7">
						<h3><a href="#" title="Science In The New Era">Know Your Government</a></h3>
						<!--<div class="event-meta">
							<span><i aria-hidden="true" class="fa fa-clock-o"></i>8:00 Am - 5:00 Pm</span>
							<span><i aria-hidden="true" class="fa fa-map-marker"></i>London, UK</span>
						</div>-->
						<p>Our Website is a open source for you to know your government schemes very well.</p>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12">
						<a href="#" class="readmore" title="Read More">Read More</a>
					</div>
				</div>
			</div>
			<div class="event-box">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-5">
						<img src="images/schemespolicies.jpg" alt="event2" style="width:260px; height:200px;"/>
					</div>
					<div class="col-md-7 col-sm-6 col-xs-7">
						<h3><a href="#" title="Student Exchange Program Information Sessions">Get Schemes Relevent to You</a></h3>
						<!--<div class="event-meta">
							<span><i aria-hidden="true" class="fa fa-clock-o"></i>8:00 Am - 5:00 Pm</span>
							<span><i aria-hidden="true" class="fa fa-map-marker"></i>London, UK</span>
						</div>-->
						<p>Enter Your Details and get all the Relevant Schemes </p>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12">
						<a href="#" class="readmore" title="Read More">Read More</a>
					</div>
				</div>
			</div>
			<div class="event-box">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-5">
						<img src="images/account.png" alt="event3" style="width:260px; height:200px;"/>
					</div>
					<div class="col-md-7 col-sm-6 col-xs-7">
						<h3><a href="#" title="Chicago Architecture Foundation River Cruise">Make Free Account</a></h3>
						<!--<div class="event-meta">
							<span><i aria-hidden="true" class="fa fa-clock-o"></i>8:00 Am - 5:00 Pm</span>
							<span><i aria-hidden="true" class="fa fa-map-marker"></i>London, UK</span>
						</div>-->
						<p>Make account free of cost and get easy access to all your available Schemes</p>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12">
						<a href="#" class="readmore" title="Read More">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- Event Section /- -->



	<!-- Video Testimonial Section -->
	<!--
	<div class="container-fluid no-padding video-testimonial-section">
		<div class="container">
			<div class="section-padding"></div>
			<div class="section-header">
				<h3>Our <span>Education Events</span></h3>
				<p>Achieving the desired success requires patience and persistence your goals need time</p>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="video-block video-block-lg">
						<a title="Paly Video" class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play" aria-hidden="true"></i></a>
						<img  src="images/video-poster-1.jpg" width="570" height="400" alt="Video Poster-1"/>
						<div class="video-content">
							<h3>Your Career Starts Here</h3>
							<p>Achieving the desired success requires patience and persistence.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="testimonial-block">
						<div id="testimonial-slider" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
								<li data-target="#testimonial-slider" data-slide-to="1"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="testimonial-box">
										<div class="testimonial-content">
											<p>Credibly innovate granular internal or organic sources whereas high standards in web-readiness fully researched growth.</p>
										</div>
										<div class="testimonial-author">
											<img src="images/testimonial-thumb-1.jpg" alt="testimonial-thumb-1" width="96" height="96"/>
											<p>Darly Dixon, <span>Designing Staff</span></p>
										</div>
									</div>
									<div class="testimonial-box">
										<div class="testimonial-content">
											<p>Credibly innovate granular internal or organic sources whereas high standards in web-readiness fully researched growth.</p>
										</div>
										<div class="testimonial-author">
											<img src="images/testimonial-thumb-2.jpg" alt="testimonial-thumb-2" width="96" height="96"/>
											<p>Josh Austin,<span>Project Manager</span></p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimonial-box">
										<div class="testimonial-content">
											<p>Credibly innovate granular internal or organic sources whereas high standards in web-readiness fully researched growth.</p>
										</div>
										<div class="testimonial-author">
											<img src="images/testimonial-thumb-1.jpg" alt="testimonial-thumb-1" width="96" height="96"/>
											<p>Darly Dixon <span>Designing Staff</span></p>
										</div>
									</div>
									<div class="testimonial-box">
										<div class="testimonial-content">
											<p>Credibly innovate granular internal or organic sources whereas high standards in web-readiness fully researched growth.</p>
										</div>
										<div class="testimonial-author">
											<img src="images/testimonial-thumb-2.jpg" alt="testimonial-thumb-2" width="96" height="96"/>
											<p>Josh Austin ,<span>Project Manager</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-padding"></div>
		</div>
	</div>
--><!-- Video Testimonial Section /- -->


	<!-- LatestBlog Section -->
	<!--
	<div class="container-fulid no-padding latestblog-section">
		<div class="section-padding"></div>
		<div class="container">
			<div class="section-header">
				<h3>Latest <span> Blog Post</span></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-6">
					<article class="type-post">
						<div class="entry-cover">
							<a title="Cover" href="blogpost-page.html"><img width="363" height="261" alt="latestnews" src="images/latestblog1.jpg"></a>
						</div>
						<div class="entry-block">
							<div class="entry-contentblock">
								<div class="entry-meta">
									<span class="postdate">25th May 2016</span>
									<span class="postby">Posted by <a href="#" title="Methov jos">Methov jos</a></span>
								</div>
								<div class="entry-block">
									<div class="entry-title">
										<a title="Doloremque laudantium totam..." href="blogpost-page.html"><h3>Doloremque laudantium totam...</h3></a>
									</div>
								</div>
							</div>
							<div class="post-ic"><span class="icon icon-Pencil"></span></div>
						</div>
					</article>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<article class="type-post">
						<div class="entry-cover">
							<a title="Cover" href="blogpost-page.html"><img width="363" height="261" alt="latestnews" src="images/latestblog2.jpg"></a>
						</div>
						<div class="entry-block">
							<div class="entry-contentblock">
								<div class="entry-meta">
									<span class="postdate">25th May 2016</span>
									<span class="postby">Posted by <a href="#" title="Methov jos">Jennu Doe</a></span>
								</div>
								<div class="entry-block">
									<div class="entry-title">
										<a title="Minim veniam quis nostrud..." href="blogpost-page.html"><h3>Minim veniam quis nostrud...</h3></a>
									</div>
								</div>
							</div>
							<div class="post-ic"><span class="icon icon-MusicMixer"></span></div>
						</div>
					</article>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<article class="type-post">
						<div class="entry-cover">
							<a title="Cover" href="blogpost-page.html"><img width="363" height="261" alt="latestnews" src="images/latestblog3.jpg"></a>
						</div>
						<div class="entry-block">
							<div class="entry-contentblock">
								<div class="entry-meta">
									<span class="postdate">25th May 2016</span>
									<span class="postby">Posted by <a href="#" title="Methov jos">Steave Smith</a></span>
								</div>
								<div class="entry-block">
									<div class="entry-title">
										<a title="Perspiciatis unde omnis iste..." href="blogpost-page.html"><h3>Perspiciatis unde omnis iste...</h3></a>
									</div>
								</div>
							</div>
							<div class="post-ic"><span class="icon icon-Starship"></span></div>
						</div>
					</article>
				</div>
			</div>
			<div class="post-viewall">
				<a href="blog-page.html"  title="View All post">View All post</a>
			</div>
		</div>
		<div class="section-padding"></div>
	</div>--><!-- LatestBlog Section -->
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
            <!--<li><a href="about-page.html" title="About">About</a></li>-->
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
		header('location: login/login.html') ;
	}
}
?>
