<?php require_once "./src/routes/RequestAppointment.php" ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" />
	<!-- Meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.css" />
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/fontawesome.min.css" />
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="assets/css/nice-select.css" />
	<!-- Odometer CSS -->
	<link rel="stylesheet" href="assets/css/odometer.css" />
	<!-- Magnific CSS -->
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
	<!-- Carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
	<!-- Carousel Default CSS -->
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css" />
	<link rel="stylesheet" href="assets/css/zona.css" />

	<title>Zona Health</title>

	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
</head>

<body>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Header Area -->
	<header class="header-area">
		<div class="top-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-list">
							<li>
								<i class="flaticon-clock"></i>
								Mon-Fri 09-18.00
							</li>
							<li>
								<i class="flaticon-phone-call"></i>
								<a href="tel:821-456-241">Call Us: +821-456-241</a>
							</li>
							<li>
								<i class="flaticon-paper-plane"></i>
								<a href="mailto:hello@info.com">hello@info.com</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-6">
						<ul class="top-social">
							<li>
								<a href="#" class="facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#" class="twitter">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="pinterest">
									<i class="fab fa-pinterest-p"></i>
								</a>
							</li>
							<li>
								<a href="#" class="instagram">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="sign-in.html" class="log-in">
									Sign In
								</a>
							</li>
							<li>
								<a href="sign-up.html" class="sign-in">
									Sign Up
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Start Navbar Area -->
		<div class="navbar-area navbar-two">
			<div class="main-responsive-nav">
				<div class="container">
					<div class="main-responsive-menu">
						<div class="logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="logo" />
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="main-navbar">
				<div class="container">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.html">
							<img src="assets/img/logo.png" alt="logo" />
						</a>

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="#" class="nav-link">
										Home
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="index.html" class="nav-link">
												Home One
											</a>
										</li>

										<li class="nav-item">
											<a href="index-2.html" class="nav-link">
												Home Two
											</a>
										</li>

										<li class="nav-item">
											<a href="index-3.html" class="nav-link">
												Home Three
											</a>
										</li>

										<li class="nav-item">
											<a href="index-4.html" class="nav-link">
												Home Four
											</a>
										</li>
									</ul>
								</li>

								<li class="nav-item">
									<a href="about.html" class="nav-link">
										About
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										Services
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="services.html" class="nav-link">
												Services
											</a>
										</li>

										<li class="nav-item">
											<a href="single-services.html" class="nav-link">
												Services Details
											</a>
										</li>
									</ul>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link active">
										Pages
										<i class="fa fa-angle-down"></i>
									</a>

									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="about.html" class="nav-link">
												About
											</a>
										</li>

										<li class="nav-item">
											<a href="team.html" class="nav-link">
												Team
											</a>
										</li>

										<li class="nav-item">
											<a href="faq.html" class="nav-link">
												FAQ
											</a>
										</li>

										<li class="nav-item">
											<a href="appointment.html" class="nav-link active">
												Appointment
											</a>
										</li>

										<li class="nav-item">
											<a href="testimonials.html" class="nav-link">
												Testimonials
											</a>
										</li>

										<li class="nav-item">
											<a href="how-it-works.html" class="nav-link">
												How It Works
											</a>
										</li>

										<li class="nav-item">
											<a href="#" class="nav-link">
												Projects
												<i class="fa fa-angle-down"></i>
											</a>

											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="projects.html" class="nav-link">
														Projects
													</a>
												</li>

												<li class="nav-item">
													<a href="single-projects.html" class="nav-link">
														Projects details
													</a>
												</li>
											</ul>
										</li>

										<li class="nav-item">
											<a href="#" class="nav-link">
												Solution
												<i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="solution.html" class="nav-link">
														Solution
													</a>
												</li>

												<li class="nav-item">
													<a href="solution-details.html" class="nav-link">
														Solution Details
													</a>
												</li>
											</ul>
										</li>

										<li class="nav-item">
											<a href="#" class="nav-link">
												Shop
												<i class="fa fa-angle-down"></i>
											</a>

											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="shop.html" class="nav-link">
														Shop
													</a>
												</li>

												<li class="nav-item">
													<a href="cart.html" class="nav-link">
														Cart
													</a>
												</li>

												<li class="nav-item">
													<a href="checkout.html" class="nav-link">
														Checkout
													</a>
												</li>

												<li class="nav-item">
													<a href="single-product.html" class="nav-link">
														Products Details
													</a>
												</li>
											</ul>
										</li>

										<li class="nav-item">
											<a href="#" class="nav-link">
												User
												<i class="fa fa-angle-down"></i>
											</a>

											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="sign-in.html" class="nav-link">
														Sign In
													</a>
												</li>

												<li class="nav-item">
													<a href="sign-up.html" class="nav-link">
														Sign Up
													</a>
												</li>
											</ul>
										</li>

										<li class="nav-item">
											<a href="terms-condition.html" class="nav-link">
												Terms & Conditions
											</a>
										</li>

										<li class="nav-item">
											<a href="privacy-policy.html" class="nav-link">
												Privacy Policy
											</a>
										</li>

										<li class="nav-item">
											<a href="error-404.html" class="nav-link">
												404 Error
											</a>
										</li>

										<li class="nav-item">
											<a href="contact.html" class="nav-link">
												Contact
											</a>
										</li>
									</ul>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										Blog
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="blog-1.html" class="nav-link">
												Blog Grid
											</a>
										</li>

										<li class="nav-item">
											<a href="blog-2.html" class="nav-link">
												Blog Right Sidebar
											</a>
										</li>

										<li class="nav-item">
											<a href="blog-details.html" class="nav-link">
												Blog Details
											</a>
										</li>
									</ul>
								</li>

								<li class="nav-item">
									<a href="contact.html" class="nav-link">
										Contact
									</a>
								</li>
							</ul>

							<div class="others-options">
								<a href="appointment.html" class="default-btn-two">
									Get a Quote
									<span></span>
								</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Navbar Area -->
	</header>
	<!-- End Header Area -->

	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg-5">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Appointment</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Appointment</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Emergency Area -->
	<section class="emergency-area bg-top ptb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="emergency-item">
						<div class="image">
							<img src="assets/img/emergency.jpg" alt="image" />
						</div>
						<div class="content">
							<h3>Emergency Blood Test in 30 Minutes</h3>
							<p>
								<a href="tel:821-456-321"><b>Contact Us:</b> +821-456-321</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="emergency-form">
						<div class="content">
							<h3>
								<i class="flaticon-calendar"></i>
								Make An Appointment
							</h3>
						</div>
						<form method="POST">
							<div class="row">
								<!--<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" id="Name" placeholder="Enter Your Name" />
										<i class="flaticon-user"></i>
									</div>
								</div> --->

								<!--<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" id="Email" placeholder="Enter Email" />
										<i class="flaticon-email"></i>
									</div>
								</div> --->

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<i class="flaticon-doctor"></i>

										<select name="doctor">
											<?php foreach ($doctors as $doctor)
												echo "<option value='{$doctor->getId()}'>Dr. {$doctor->getUserInfo()->getFullName()} </option>"
											?>
										</select>
									</div>
								</div>

								<!--	<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<i class="flaticon-shield"></i>
										<select>
											<option value="">Select Department</option>
											<option value="">Cardiologists</option>
											<option value="">Dermatologists</option>
											<option value="">Endocrinologists</option>
											<option value="">Gastroenterologists</option>
											<option value="">Allergists</option>
											<option value="">Immunologists</option>
										</select>
									</div>
								</div> --->

								<div class="col-12">
									<div class="appointment-btn">
										<button type="submit" class="default-btn">
											Submit Application
											<span></span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Emergency Area -->

	<!-- Start Appointment Area -->
	<section class="appointment-area ptb-100">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="single-fun-fact">
								<h3>
									<span class="odometer" data-count="2700">00</span>
									<span class="sign-icon">+</span>
								</h3>
								<p>Care Locations</p>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-fun-fact">
								<h3>
									<span class="odometer" data-count="2.7">00</span>
									<span class="sign-icon">K</span>
								</h3>
								<p>Virtual Care Solutions</p>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-fun-fact">
								<h3>
									<span class="odometer" data-count="99.60">00</span>
									<span class="sign-icon">%</span>
								</h3>
								<p>Connections Success Rate</p>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-fun-fact">
								<h3>
									<span class="odometer" data-count="30">00</span>
									<span class="sign-icon">+</span>
								</h3>
								<p>Award Winning</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="appointment-form">
						<div class="content">
							<span>Call to Action</span>
							<h3>Make An Appointment</h3>
						</div>
						<form>
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" id="Name" placeholder="Enter Your Name" />
										<i class="flaticon-user"></i>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" id="Email" placeholder="Enter Email" />
										<i class="flaticon-email"></i>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" id="Phone" placeholder="Enter Phone Number" />
										<i class="flaticon-call"></i>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<select>
											<option value="">Select Category</option>
											<option value="">Cardiologists</option>
											<option value="">Dermatologists</option>
											<option value="">Endocrinologists</option>
											<option value="">Gastroenterologists</option>
											<option value="">Allergists</option>
											<option value="">Immunologists</option>
										</select>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<select>
											<option value="">Select Doctor</option>
											<option value="">Dr. James Adult</option>
											<option value="">Dr. James Alison</option>
											<option value="">Dr. Peter Adlock</option>
											<option value="">Dr. Jelin Alis</option>
											<option value="">Dr. Josh Taylor</option>
											<option value="">Dr. Steven Smith</option>
										</select>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<div class="input-group date" id="datetimepicker">
											<input type="text" class="form-control" placeholder="Date" />
											<span class="input-group-addon"></span>
										</div>
										<i class="flaticon-calendar"></i>
									</div>
								</div>

								<div class="col-12">
									<div class="appointment-btn">
										<button type="submit" class="default-btn">
											Confirm Appointment
											<span></span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Appointment Area -->

	<!-- Start About Area -->
	<section class="about-area ptb-100">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="about-image">
						<img src="assets/img/about-3.jpg" alt="image" />
					</div>
				</div>

				<div class="col-lg-6">
					<div class="about-content">
						<span>About Us</span>
						<h3>
							Connect to Call a Doctor by Video or Audio During the COVID-19
							Pandemic
						</h3>
						<p>
							Many healthcare systems around the world together with
							government agencies and startup companies are building and
							delivering Telehealth solutions the future of non-emergency and
							routine healthcare delivery
						</p>

						<ul class="about-features two">
							<li>
								<span>
									<i class="flaticon-doctor"></i>
									Orthopedic Solutions
								</span>
							</li>
							<li>
								<span>
									<i class="flaticon-worm"></i>
									Chronic Disease
								</span>
							</li>
							<li>
								<span>
									<i class="flaticon-cough"></i>
									COVID-19 Test
								</span>
							</li>
							<li>
								<span>
									<i class="flaticon-blood-test"></i>
									Diabetic Test
								</span>
							</li>
							<li>
								<span>
									<i class="flaticon-family"></i>
									Family Solutions
								</span>
							</li>
							<li>
								<span>
									<i class="flaticon-insurance"></i>
									Medical Questions
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start Footer Area -->
	<section class="footer-area pt-100 pb-70">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget">
						<h3>Zona Health</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
							eiusmod tempor incididunt ut labore et dolore aliqua.
						</p>
						<ul class="footer-social">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>

							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>

							<!-- <li>
                                    <a href="#">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li> -->
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget">
						<h3 class="shift-links">Communication</h3>

						<ul class="footer-quick-links">
							<li>
								<a class="shift-links" href="faq.html">Faq</a>
							</li>
							<li>
								<a class="shift-links" href="testimonials.html">Testimonials</a>
							</li>
							<li>
								<a class="shift-links" href="privacy-policy.html">Privacy Policy</a>
							</li>

							<!-- <li>
                                    <a href="#">
                                        <img src="assets/img/instagram/1.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/instagram/2.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/instagram/3.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/instagram/4.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/instagram/1.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/instagram/2.jpg" alt="image">
                                    </a>
                                </li> -->
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget pl-5">
						<h3>Useful Links</h3>

						<ul class="footer-quick-links">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="solution.html">Solution</a>
							</li>
							<li>
								<a href="services.html">Services</a>
							</li>
							<!-- <li>
                                    <a href="blog.html">Blog</a>
                                </li> -->
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget">
						<h3>Contact</h3>

						<div class="footer-info-contact">
							<i class="flaticon-call"></i>
							<h3>Phone</h3>
							<span><a href="tel:123456123">+123(456)123</a></span>
						</div>

						<div class="footer-info-contact">
							<i class="flaticon-email"></i>
							<h3>Email</h3>
							<span><a href="mailto:info@Zona Health.com">info@Zona Health.com</a></span>
						</div>

						<div class="footer-info-contact">
							<i class="flaticon-pin"></i>
							<h3>Address</h3>
							<span>3254-425 NW-2nd Ave, Miami USA</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="lines">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</section>
	<!-- End Footer Area -->

	<!-- Start Copy Right Section -->
	<div class="copyright-area">
		<div class="container">
			<p>
				<i class="far fa-copyright"></i>
				2020 Zona Health. All Rights Reserved by
				<a href="https://branfluenzas.com/" target="_blank">
					Branfluenzas
				</a>
			</p>
		</div>
	</div>
	<!-- End Copy Right Section -->

	<!-- Start Go Top Area -->
	<div class="go-top">
		<i class="fa fa-chevron-up"></i>
		<i class="fa fa-chevron-up"></i>
	</div>
	<!-- End Go Top Area -->

	<!-- Jquery Slim JS -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Meanmenu JS -->
	<script src="assets/js/jquery.meanmenu.js"></script>
	<!-- Nice Select JS -->
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<!-- Odometer JS -->
	<script src="assets/js/odometer.min.js"></script>
	<!-- Appear JS -->
	<script src="assets/js/jquery.appear.js"></script>
	<!-- Datepicker JS -->
	<script src="assets/js/datepicker.min.js"></script>
	<!-- Magnific JS -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Carousel JS -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Form Ajaxchimp JS -->
	<script src="assets/js/jquery.ajaxchimp.min.js"></script>
	<!-- Form Validator JS -->
	<script src="assets/js/form-validator.min.js"></script>
	<!-- Contact JS -->
	<script src="assets/js/contact-form-script.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/main.js"></script>
</body>

</html>
