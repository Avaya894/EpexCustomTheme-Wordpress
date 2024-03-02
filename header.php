<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>SEEE-Society of Electrical and Electronics.</title>
		
		<!-- Favicon -->
        <!-- <link rel="icon" href="img/seee-icon.png"> -->
    
        <?php wp_head(); ?>
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="10 1 12 6 15 6 1 6 4 6 6 11 "></polyline>
                        <polyline id="front" points="10 1 12 6 15 6 1 6 4 6 6 11"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		<ul class="pro-features">
			<a class="get-pro" href="#">Message</a>
			<li class="big-title">SEEE Organzing EEPEX</li>
			<li class="title">Ignite Illuminate Inspect</li>
			<li>2+ Pre Events</li>
			<li>20+ Projects</li>
			<div class="button">
			</div>
		</ul>
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="#">About</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+977 9803367844 </li>
								<li><i class="fa fa-envelope"></i><a href="mailto:seee@ku.edu.np">seee@ku.edu.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="<?php echo get_template_directory_uri().'/assets/img/seee-icon-long.png'; ?>" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<!-- <ul class="nav menu">
											<li class="active"><a href="#">Home </a>
											<li><a href="about.html">About Us</a></li>
											<li><a href="encipher.html">Encipher </a></li>
											<li><a href="academics.html">Academics </a></li>
											<li><a href="notices.html">Notices </a> </li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul> -->
										<?php wp_nav_menu( array( 'menu_class' => 'nav menu', 'container' => 'ul', )); ?>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="eepex.html" class="btn">EEPEX 24</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->