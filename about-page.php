<?php
session_start();
if($_SESSION['logged_in'])
{
echo'
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
	<title>Agriculture</title>
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
									<!--<li><a title="About" href="about-page.html">About</a></li>-->


								</ul>
							</div>
						</div>
					</nav><!-- Navigation /- -->
					<!--<div class="menu-search">
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
				<h3>Livestock Insurance Scheme</h3>
			<!--	<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>About us</li>
				</ol>-->
			</div>
		</div>
	</div><!-- PageBanner /- -->
	<!-- WhyChooseUs Section -->
	<!--<div class="container whychooseus-section" <span> Edumax</span></h3>
			<p>Achieving the desired success requires patience and persistence your goals need time</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="video-block">
					<a title="Paly Video" class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play" aria-hidden="true"></i></a>
					<img  src="images/video-poster-2.jpg" width="570" height="400" alt="Video Poster"/>
					<div class="video-content">
						<h3>Your Career Starts Here</h3>
						<p>Achieving the desired success requires patience and persistence.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 accordion-section">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="accordion_1">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion1" aria-expanded="true" aria-controls="accordion1">Careers</a>
							</h4>
						</div>
						<div id="accordion1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion_1">
							<div class="panel-body">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accu santiumuo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illomas inventore veritatis et quasi architecto beatae vitae dicta sunt explicaon Nemo enim ipsam voluptatem quia voluptas</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="accordion_2">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion2" aria-expanded="false" aria-controls="accordion2">Clients Approch</a>
							</h4>
						</div>
						<div id="accordion2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_2">
							<div class="panel-body">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accu santiumuo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illomas inventore veritatis et quasi architecto beatae vitae dicta sunt explicaon Nemo enim ipsam voluptatem quia voluptas</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="accordion_3">
							<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion3" aria-expanded="false" aria-controls="accordion3">24/7 Professional Support</a>
						</h4>
						</div>
						<div id="accordion3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_3">
							<div class="panel-body">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accu santiumuo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illomas inventore veritatis et quasi architecto beatae vitae dicta sunt explicaon Nemo enim ipsam voluptatem quia voluptas</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- WhyChooseUs Section /- -->-->
	<!-- Team Section -->
<!--	<div class="container-fluid no-padding team-section">
		<div class="section-padding"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 team-content-block">
					<div class="section-header">
						<h3>Meet <span> Our Staffs</span></h3>
						<p>Our creative and professional staffs</p>
					</div>
					<div class="team-intro">
						<p>World Largest books and library center is here where you can study the latest trends of the education.If you want to build a successful business online, watch the promo video to see why 13,000+ students are using this online entrepreneurship course to learn.</p>
					</div>
					<a class="left carousel-control" href="#team-carousel" role="button" data-slide="prev">Prev</a>
					<a class="right carousel-control" href="#team-carousel" role="button" data-slide="next">Next</a>
				</div>
				<div class="col-md-6 col-sm-12 team-gallary">
					<div id="team-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="team-box">
											<ul>
												<li><a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a title="Twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a title="Google-Pluse" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a title="Behance" href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
												<li><a title="Dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											</ul>
											<img alt="team1" src="images/team1.jpg" width="290" height="370"/>
											<div class="team-content">
												<h3>Martin Phillips</h3>
												<span>Executive Director</span>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="team-box">
											<ul>
												<li><a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a title="Twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a title="Google-Pluse" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a title="Behance" href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
												<li><a title="Dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											</ul>
											<img alt="team2" src="images/team2.jpg" width="290" height="370"/>
											<div class="team-content">
												<h3>Thomas Wright</h3>
												<span>Web Developer</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="team-box">
											<ul>
												<li><a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a title="Twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a title="Google-Pluse" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a title="Behance" href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
												<li><a title="Dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											</ul>
											<img alt="team1" src="images/team1.jpg" width="290" height="370"/>
											<div class="team-content">
												<h3>Martin Phillips</h3>
												<span>Executive Director</span>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="team-box">
											<ul>
												<li><a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a title="Twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a title="Google-Pluse" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a title="Behance" href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
												<li><a title="Dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											</ul>
											<img alt="team2" src="images/team2.jpg" width="290" height="370"/>
											<div class="team-content">
												<h3>Thomas Wright</h3>
												<span>Web Developer</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- Team Section /- -->-->
	<!-- callOut -->
<!--	<div class="container-fluid no-padding callout">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-8 callout-content">
					<h3>Become an instructor</h3>
					<p>Join thousand of instructors and earn money hassle free</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-4">
					<a href="#" title="Join Now">Join Now</a>
				</div>
			</div>
		</div>
	</div><!-- callOut /- -->_------
	<!-- Footer Main --> -->
	<div class="container coursesdetail-section">
		<div class="section-padding"></div>
			<div class="row">
				<div class="col-md-9 col-sm-8 event-contentarea">
					<div class="coursesdetail-block">
						<img src="images/photoslider1.jpg" alt="event-coursesdetail" width="860" height="500"/>
						<div class="course-description">
							<h3 class="course-title">Scheme Description</h3>
							<p>The Government of India has initialised the livestock insurance scheme for the Drought Aid farmers of India. This Scheme is a part of Pradhan Mantri Vikas Yojana  </p>
							<!--<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi id est laborum et dolorum fuga.</p>-->
						</div>
						<div class="courses-summary">
							<h3 class="course-title">Scheme summary</h3>
							<ul>
								<li><a href="#" title="Over 94 lectures and 6 hours">Agricultural scheme </a></li>
								<li><a href="#" title="Educated Staff">For Individual</a></li>
								<li><a href="#" title="To teach real programming skills">Provides Agricultural Kit</a></li>
								<li><a href="#" title="Timesheets">One Year Span</a></li>
								<li><a href="#" title="Build a solid understanding">Apply at nearest Kissan Center</a></li>
								<li><a href="#" title="Video Lessons">Free Application</a></li>
							</ul>
						</div>
				<!--		<div class="courses-curriculum">
							<h3 class="course-title">Courses curriculum</h3>
							<div class="courses-sections-block">
								<h3>Section 1: <span>Introduction</span></h3>
								<div class="courses-lecture-box">
									<i class="fa fa-file-o" aria-hidden="true"></i>
									<span class="lecture-no">Lecture 1.1</span>
									<span class="lecture-title">Introduction to Software Training</span>
									<span class="lecture-time">00:40:00</span>
								</div>
								<div class="courses-lecture-box">
									<i class="fa fa-file-o" aria-hidden="true"></i>
									<span class="lecture-no">Lecture 1.2</span>
									<span class="lecture-title">Software Training</span>
									<span class="lecture-tag"><a href="#">Free</a></span>
									<span class="lecture-time">00:50:00</span>
								</div>
							</div>
							<div class="courses-sections-block">
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
							</div>
						</div>-->
						<!--<div class="courses-review">
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
						<h3>Know About </h3><h3>this Scheme</h3>
						<!--<ul>
							<li><a href="#" title="1 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="2 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="3 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="4 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
							<li><a href="#" title="5 Star"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
						</ul>-->
						<!--<span>( 0  Review )</span>-->
						<div class="featuresbox"><img src="images/codepen-ic.png" alt="codepen-ic" width="22" height="22"/><h3>Scheme Aid : </h3><span> Financial</span></div>
						<div class="featuresbox"><img src="images/dolar-ic.png" alt="dolar-ic" width="27" height="27"/><h3>Application Fee: </h3><span> Free</span></div>
						<div class="featuresbox"><img src="images/clock-ic.png" alt="clock-ic" width="24" height="24"/><h3>Duration : </h3><span> 1 year</span></div>
						<div class="featuresbox"><img src="images/cup-ic.png" alt="cup-ic" width="24" height="23"/><h3>Type: </h3><span> Government</span></div>
						<div class="featuresbox"><img src="images/user-ic.png" alt="user-ic" width="22" height="22"/><h3>Certificates needed : </h3><span> YES</span></div>
						<div class="featuresbox"><img src="images/cap-ic.png" alt="cap-ic" width="24" height="20"/><h3>Currently Available</h3></div>
					</div>
					<!--<div class="courses-staff">
						<img src="images/staff.jpg" alt="staff" width="275" height="288"/>
						<h3>Charlie Brown</h3>
						<span>Web Designer</span>
						<p>My name is Ruth. I grew up and studied in…</p>
					</div>-->
				</div>
			</div>
		<div class="section-padding"></div>
	</div>

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
        <!--  <p>Trem ipsum dolor sit ameThese men promptly escaped from maximum security astockade to the Los Angeles underground. These Happy Days are yours and mine Happy Days elites consectetur adipiscing elit, sed do eiusmod tempor incididunt utiles labore et dolor hates magna ali qua.</p>-->
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
