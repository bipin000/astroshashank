<?php
$file=basename($_SERVER['REQUEST_URI']);
 ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Astro By Shashank</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Astro By Shashank" />
	<meta name="keywords" content="Astro By Shashank" />
	<meta name="author" content="bct" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div id="fh5co-logo"><a href="index.php">Astro By Shashank<span>.</span></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
<ul>
							<li <?php if($file=="index.php") echo 'class="active"'; ?>><a href="index.php">Home</a></li>
							<li class="has-dropdown <?php if($file=='about_us.php') echo 'active'; ?>"><a href="about_us.php">About Us</a>
								<ul class="dropdown">
									<li><a href="our_history.php">Our History</a></li>
									<li><a href="our_mission.php">Our Mission</a></li>
								</ul>							
							</li>
							
							<li class="has-dropdown <?php if($file=='our_services.php') echo 'active'; ?>" ><a href="our_services.php">Our Services</a>
								<ul class="dropdown">
									<li><a href="astro_healing.php">Astro Healing</a></li>
									<li><a href="gemology.php">Gemology</a></li>
									<li><a href="rudraksha.php">Rudraksh</a></li>
									<li><a href="lal_kitab.php">Lal Kitab</a></li>
									<li><a href="kundali.php">Kundali</a></li>
								</ul>							
							</li>
							
							<li <?php if($file=="ask_us.php") echo 'class="active"'; ?>><a href="ask_us.php">Ask Us</a></li>
							<li <?php if($file=="testimonials.php") echo 'class="active"'; ?>><a href="testimonials.php">Celebrity Testimonial</a></li>
						</ul>
						
											

					
					
		
					</div>
				</div>
				
			</div>
		</div>
	</nav>
