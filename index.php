<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Management System</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">INFO@HMS.COM</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+92 303-961-9793</li>	
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder=" " required=" " />
									<input type="submit" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php"><center>HM<span>S</center></span><p class="logo_w3l_agile_caption">Your Dreamy Resort</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>Hotel Management System</h4>
									<h3>We know what you love</h3>
										<p>Welcome to Pakistan</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Welcome to Pakistan</h4>
									<h3>Stay with friends & families</h3>
										<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Enjoy luxery Rooms</h4>
								<h3>want luxurious vacation?</h3>
										<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>HM <span>S</span></h4>
										<img src="images/1.jpg" alt=" " class="img-responsive">
										<h5>We know what you love</h5>
										<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<a href="admin/reservation.php"><h2>ROOM RESERVATION</h2></a>
</div>

			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
							<span class="cbp-ig-category">HMS</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
							<span class="cbp-ig-category">HMS</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">LARGE CAFE</h4>
							<span class="cbp-ig-category">HMS</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
							<span class="cbp-ig-category">HMS</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">About Our HMS</h3> 
						   <p class="about-para-w3ls">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Sed tempus vestibulum lacus blandit faucibus. Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, at imperdiet urna</p>
						   <img src="https://flypakistan.pk/images/1-min.webp" class="img-responsive" alt="Hair Salon">
										<div class="w3l-slider-img">
											<img src="https://www.kayak.com/rimg/dimg/0c/7a/5a0aa493-city-33609-164cd9b7bd8.jpg?crop=true&width=400&height=300" class="img-responsive" alt="Hair Salon">
										</div>
                                       <div class="w3ls-info-about">
										    <h4>You'll love all the amenities we offer!</h4>
											<p>Lorem ipsum dolor sit amet, ut magna aliqua. </p>
										</div>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits">Our Services</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Stay First, Pay After! </h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum neceSUNssitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>24 Hour Restaurant</h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree"></h3>
			<div id="horizontalTab">
					
					<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Lucas Jimenez</h4>
							<span>Manager</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab2">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Sarah</h4>
							<span>Receptionist</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>	
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeCTtQ0mYOT9Vt0ZdRAc3BC1-S2uq7LxxXYEbSH_MOLJx3X1D9k6BnHF1YdmWLip3MGQg&usqp=CAU">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Ghulab Zada</h4>
							<span>Manager</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Muneer Ashraf</h4>
							<span>Receptionist</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
			</div>
	</div>
</div>
<!-- //team -->
 <!-- visitors -->
 <div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="https://bizmanagement.pk/pakistan/uploads/2018/05/ecomx-1024x576.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/111.jpeg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								
								Front-end Developer
								</h4>
								<p>Come join us for more 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Gulab Zada</h5>
								<p>Pakistan</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/222.jpeg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								
								Web Designer
								</h4>
								<p>We are always ready to help others. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Munir Ashraf</h5>
								<p>Pakistan</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
						
							
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="https://fankaronline.com/content/uploads/2018/07/Hire-Corporate-Events-Pakistan.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="https://media.licdn.com/dms/image/D4D03AQEAppIr_0unqQ/profile-displayphoto-shrink_800_800/0/1674907474981?e=2147483647&v=beta&t=dFLAdAc8sKTQ3QdJQnzS7YWZMiZwBBLBeFc9XU9BOP0" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								
								Analyzer
								</h4>
								<p>Love your own dreams. 
									We design your imaginations </p>
								<h5>Usama</h5>
								<p>Assistant</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->
  <br><br>
<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
		 <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="data:image/jpeg;base64,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" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="data:image/jpeg;base64,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" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="data:image/jpeg;base64,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" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>HMS</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
	 <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Deluxe Room</h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									<ul>
											<li></li>
											<li></li>
											<li></li>
											<li></li>
											<li><i class="" aria-hidden="true"></i></li>
									
								     </ul>
							</div>
							<div class="price-selet">	
								<h3><span>PKR</span>6000</h3>						
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Luxury Room</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
									<ul>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>PKR</span>20000</h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Guest House</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>PKR</span>80000</h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Single Room</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>PKR</span> 3000</h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	 <!--// rooms & rates -->
 
<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+92 303-961-9793</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@HMS.com</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Gulshan Park, Pakistan </p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.869844792255!2d67.09553627332116!3d24.936503477879686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338b24daf58f5%3A0xae6ff60ced85ff4b!2sGulshan%20Park%2C%2072%2C%20Block%204%20Gulshan-e-Iqbal%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1686633508521!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>© 2023 Hotel Management System . All Rights Reserved | Design by <a href="index.php">Munir Ashraf & Gulab zada</a> </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


