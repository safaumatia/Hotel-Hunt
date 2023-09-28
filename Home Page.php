<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Hunt</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Samira hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="#" class="text-center">
						<div class="logo_subtitle">Hotel</div>
						<div class="logo_title">Hunt</div>
						<div class="logo_stars">
							<ul class="d-flex flex-row align-items-start justfy-content-start">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_inner d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li class="active"><a href="Home Page.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Home</span></div></a></li>
									<li><a href="signup.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Register</span></div></a></li>
									<li><a href="hotellistsexplore.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Explore</span></div></a></li>
									<li><a href="dashboard.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>My Account</span></div></a></li>
									<li><a href="loginadmin.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
								</ul>
							</nav>
							<a href="hotellistsexplore.php" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
							<div class="header_review"><a href="#">Add your review</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">Register</a></li>
				<li><a href="rooms.html">Explore</a></li>
				<li><a href="news.html">My Account</a></li>
				<li><a href="contact.html">Admin</a></li>
			</ul>
			<div class="menu_review"><a href="#">Add your review</a></div>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url(images/hotel1.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">Luxury hotels</div>
										<div class="home_title">Amazing Services, Location & Facilities</div>
										<a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">luxury hotels</div>
										<div class="home_title">Amazing Services, Location & Facilities</div>
										<a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url(images/hotel0.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">luxury hotels</div>
										<div class="home_title">Amazing Services, Location & Facilities</div>
										<a href="listofhotels.html" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- Search Bar -->

	<div class="search_bar">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_bar_container">
						<form action="#" id="search_bar_form" class="search_bar_form d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-between clearfix">
							<div>
								<select class="search_form_select">
									<option disabled selected>Select Destination</option>
									<option>Maharashtra</option>
									<option>goa</option>
									<option>Banglore</option>
								</select>
							</div>
							<div>
								<select class="search_form_select">
									<option disabled selected>Select Arrival Date</option>
									<option>11/15/2018</option>
									<option>11/22/2018</option>
									<option>11/29/2018</option>
								</select>
							</div>
							<div>
								<select class="search_form_select">
									<option disabled selected>Select Departure date</option>
									<option>11/29/2020</option>
									<option>11/30/2020</option>
									<option>11/25/2020</option>
									<option>11/22/2020</option>
								</select>
							</div>
							<div><button class="search_bar_button"><a href="hotellistsneelam.html" style="color: white;">Request a Quote</a></button></div>
						</form>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Intro Content -->
				<div class="col-lg-5 intro_col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
						<div class="intro_content">
							<div class="section_title_container">
								<div class="section_subtitle">luxury hotels</div>
								<div class="section_title"><h2>Relax in our one of our best Hotels</h2></div>
							</div>
							<div class="intro_text">
								<p>The Leela Goa is a unique property set amidst sprawling 75 acres of lush landscapes and beautiful lagoons with a winding river on one side and the azure blue sea on the other. The resort is as enchanting as it is unique. If you are looking for luxury in a beachside setting, then The Leela Goa is a perfect choice. The resort offers spacious and airy rooms, balconies that open up to majestic views.</p>
							</div>
							<div class="intro_link"><a href="rooms.html">View Rooms</a></div>
							<a href="#" class="button_container intro_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
						</div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-7 intro_col">
					<div class="intro_images magic_up">
						<!-- Image credit: https://unsplash.com/@yuni_ladyday2 -->
						<div class="intro_1 intro_img"><img src="images/intro_1.jpg" alt=""></div>
						<!-- Image credit: https://unsplash.com/@liliane -->
						<div class="intro_2 intro_img"><img src="images/intro_2.jpg" alt=""></div>
						<!-- Image credit: https://unsplash.com/@brucemars -->
						<div class="intro_3 intro_img"><img src="images/intro_3.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Big Room -->

	<div class="big_room">
		<div class="container-fluid">
			<div class="row row-xl-eq-height">
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="big_room_slider_container">

						<!-- Big Room SLider -->
						<div class="owl-carousel owl-theme big_room_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(images/img_1.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(images/img_1.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(images/img_1.jpg)"></div>
							</div>

						</div>

						<div class="big_room_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="big_room_slider_prev big_room_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
							<div class="big_room_slider_next big_room_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 order-xl-2 order-1">
					<div class="big_room_content">
						<div class="big_room_content_inner magic_up">
							<div class="section_title_container">
								<div class="section_subtitle">luxurious resorts</div>
								<div class="section_title"><h2>Rooms on private island</h2></div>
							</div>
							<div class="big_room_text">
								<p>Jag Niwas is today the majestic and magnificent Taj Lake Palace of Udaipur.  Restored to its pristine glory, this spectacular palace became world renowned when the James Bond film ‘Octopussy’ was filmed at it. It was the secluded lair of the film’s eponymous Bond Girl. This heritage hotel has 65 luxurious rooms and 18 grand suites. Its location on an island in the midst of a lake affords every room breathtaking views of the neighbouring City Palace, Aravalli Hills, Machla Magra Hills and Jag Mandir.</p>
							</div>
							<div class="testimonial">
								<div class="testimonial_stars">
									<ul class="d-flex flex-row align-items-start justfy-content-start">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="testimonial_text">“ I visited Taj Lake Palace with my wife and we had the best experience of our life time. This place lives up to the hype. The palace is beautifully made and the service makes it even better. </div>
								<div class="testimonial_author d-flex flex-row align-items-center justify-content-start">
									<div class="testimonial_author_image"><img src="images/testimonial.png" alt=""></div>
									<div class="testimonial_author_name"><a href="#">Pulkit B.</a><span>, Client</span></div>
								</div>
							</div>
						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Room -->

	<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center magic_up">
						<div class="section_subtitle">luxury hotels</div>
						<div class="section_title"><h2>Choose a Property</h2></div>
					</div>
				</div>
			</div>
			<div class="row room_row magic_up">

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/room_1.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs 9,000 / <span>Night</span></div>
							<div class="room_title"><a href="rooms.html">Luxurious Hotels</a></div>
							<a href="oh.php" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/room_2.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs 8,000 / <span>Night</span></div>
							<div class="room_title"><a href="rooms.html">Luxury Resorts</a></div>
							<a href="hotellists.php" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/room_3.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs 11,000 / <span>Night</span></div>
							<div class="room_title"><a href="rooms.html">Deluxe Villas</a></div>
							<a href="hotellists.php" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<div class="row room_row magic_up">

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/room_1.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs 5,000 / <span>Night</span></div>
							<div class="room_title"><a href="rooms.html">Comfy Apartments</a></div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/room_2.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs 13,000 / <span>Night</span></div>
							<div class="room_title"><a href="rooms.html">Private Cottages</a></div>
							<a href="listofhotels.html" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/room_3.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs 7,000 / <span>Night</span></div>
							<div class="room_title"><a href="rooms.html">Spacious Cabins</a></div>
							<a href="listofhotels.html" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery" style="margin-top: 100px;">
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider magic_up">
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_1.jpg"><img src="images/gallery_1.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_2.jpg"><img src="images/gallery_2.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_3.jpg"><img src="images/gallery_3.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_4.jpg"><img src="images/gallery_4.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="images/gallery_5.jpg"><img src="images/gallery_5.jpg" alt=""></a>
				</div>
			</div>

		</div>

		<!-- Nav -->
		<div class="gallery_slider_nav_container">
			<div class="container">
				<div class="row">
					<div class="col clearfix">
						<div class="gallery_slider_nav_content d-flex flex-row align-items-start justify-content-start">
							<div class="gallery_slider_prev gallery_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
							<div class="gallery_slider_next gallery_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>			
		</div>

	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo_container">
						<div class="footer_logo">
							<a href="#" class="text-center">
								<div class="footer_logo_subtitle">hotel</div>
								<div class="footer_logo_title">Hunt</div>
								<div class="footer_logo_stars">
									<ul class="d-flex flex-row align-items-start justfy-content-start">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
								</div>
							</a>
						</div>
						<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Hotel Hunt

</div>
					</div>
				</div>

				<!-- Footer Menu -->
				<div class="col-lg-5 footer_col">
					<div class="footer_menu">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">Register</a></li>
							<li><a href="rooms.html">Explore</a></li>
							<li><a href="news.html">My Account</a></li>
							<li><a href="contact.html">Admin</a></li>
						</ul>
						<div class="footer_menu_text">
							<p>The best online booking website. We assure to provide the best services to our customers.</p>
						</div>
					</div>
				</div>

				<!-- Footer Contact -->
				<div class="col-lg-4 footer_col">
					<div class="footer_contact clearfix">
						<div class="footer_contact_content float-lg-right">
							<ul>
								<li>Address: <span>52 Park Lane Colaba MU 30424</span></li>
								<li>Phone: <span>+91 022 7953 3453</span></li>
								<li>Email: <span>hotelhunt@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>