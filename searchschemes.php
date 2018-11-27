<?php
include('login/db.php');
session_start();
$category="";
$type1="";
$keyword="";

if($_SESSION['logged_in'])
{
  if(isset($_POST['category']))
  {
  $category = $_POST['category'];
  echo $_POST['type1'];
  $type1 =  $_POST['type1'];
  $keyword =  $_POST['keyword'];
//  $sql='SELECT domain_id from domain where domain_name=$category. ';
  $sql = 'SELECT domain_id
  FROM domain WHERE domain_name="'.$category.'"';
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();
  $domain_id=$row["domain_id"];
  $sql = 'SELECT * from schemes where domain_id="'.$domain_id.'"';
  $result = $mysqli->query($sql);

}
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
  	<title>Schemes Searched</title>
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
  	<!-- PageBanner3 -->
  	<div class="container-fluid no-padding pagebanner3">
  		<div class="container">
  			<div class="pagebanner3-content">
  				<h3>Schemes Relevent To You Are .......</h3>
  				<!--<ol class="breadcrumb">
  					<li><a href="index.php">Home</a></li>
  					<li>Courses</li>
  				</ol>-->
  			</div>
  		</div>
  	</div><!-- PageBanner3 /- -->
    <br><br>
    <div class="container coursesdetail-section">
    <div class="courses-curriculum">
      <h3 class="course-title">Schemes Filtered</h3>
      <div class="courses-sections-block">
      ';
      while($row = $result->fetch_assoc())
        {
          echo '<div class="courses-lecture-box">
            <i class="fa fa-file-o" aria-hidden="true"></i>
            <span class="lecture-no">'.$category.'</span>
            <a href="about-page.php"><span class="lecture-title">'.$row['scheme_name'].'</span></a>
            <!--<span class="lecture-time">00:40:00</span>-->
          </div>';
        }
        echo '
      <!--  <div class="courses-lecture-box">
          <i class="fa fa-file-o" aria-hidden="true"></i>
          <span class="lecture-no">Lecture 1.2</span>
          <span class="lecture-title">Software Training</span>
          <span class="lecture-tag"><a href="#">Free</a></span>
          <span class="lecture-time">00:50:00</span>
        </div>-->
      </div>
  <!--    <div class="courses-sections-block">
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



      ';
}
 ?>
