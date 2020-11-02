<?php require_once "./src/routes/AdminSignUp.php"; ?>

<!DOCTYPE html>

<html>

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
							<!-- <li>
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
                                </li> -->
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
							<li>
								<a href="doctor-sign-up.html" class="log-in">
									Join Us
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
							<span class="navbarBrand">Zona Health</span>
						</a>

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="Solution.html" class="nav-link active">
										Solution
										<!-- <i class="fa fa-angle-down"></i> -->
									</a>
									<!-- <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="index.html" class="nav-link active">
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
                                        </ul> -->
								</li>

								<li class="nav-item">
									<a href="about.html" class="nav-link">
										About
									</a>
								</li>

								<li class="nav-item">
									<a href="services.html" class="nav-link">
										Services
										<!-- <i class="fa fa-angle-down"></i> -->
									</a>
									<!-- <ul class="dropdown-menu">
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
                                        </ul> -->
								</li>

								<!-- <li class="nav-item">
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
                                    </li> -->

								<!-- <li class="nav-item">
                                        <a href="#" class="nav-link">
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
                                                <a href="faq.html" class="nav-link">
                                                    FAQ
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="appointment.html" class="nav-link">
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
                                    </li> -->

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
	<div class="page-title-area item-bg-2">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Sign Up</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Sign Up</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Signup Area -->
	<div class="signup-area ptb-100">
		<div class="container">
			<div class="signup-form">
				<h3>Create your Account</h3>
				<form method="POST">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input value="<?php echo reclaimPostItem('firstName') ?>" required name="firstName" type="text" class="form-control" placeholder="First Name" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input value="<?php echo reclaimPostItem('lastName') ?>" required name="lastName" type="text" class="form-control" placeholder="Last Name" />
							</div>
						</div>

						<div class="col-lg-12">
							<div class="form-group">
								<input value="<?php echo reclaimPostItem('email') ?>" required name="email" type="email" class="form-control is-invalid" placeholder="Email" />
								<?php if (isset($errors['email'])) echo "<div class='invalid-feedback'>{$errors["email"]}</div>"; ?>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="form-group">
								<input required name="password" type="password" class="form-control" placeholder="Password" />
							</div>
						</div>
						<div class="col-lg-6" style="max-height: 300px;">
							<div class="form-group">
								<select style="max-height: 300px;" id="country" name="country">

									<option value="Afganistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antigua & Barbuda">Antigua & Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bonaire">Bonaire</option>
									<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Canary Islands">Canary Islands</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Channel Islands">Channel Islands</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos Island">Cocos Island</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote DIvoire">Cote DIvoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curaco">Curacao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="East Timor">East Timor</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands">Falkland Islands</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Ter">French Southern Ter</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Great Britain">Great Britain</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guinea">Guinea</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Hawaii">Hawaii</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="Indonesia">Indonesia</option>
									<option value="India">India</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea North">Korea North</option>
									<option value="Korea Sout">Korea South</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Laos">Laos</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macau">Macau</option>
									<option value="Macedonia">Macedonia</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Malawi">Malawi</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Midway Islands">Midway Islands</option>
									<option value="Moldova">Moldova</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Nambia">Nambia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherland Antilles">Netherland Antilles</option>
									<option value="Netherlands">Netherlands (Holland, Europe)</option>
									<option value="Nevis">Nevis</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau Island">Palau Island</option>
									<option value="Palestine">Palestine</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Phillipines">Philippines</option>
									<option value="Pitcairn Island">Pitcairn Island</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Republic of Montenegro">Republic of Montenegro</option>
									<option value="Republic of Serbia">Republic of Serbia</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Rwanda">Rwanda</option>
									<option value="St Barthelemy">St Barthelemy</option>
									<option value="St Eustatius">St Eustatius</option>
									<option value="St Helena">St Helena</option>
									<option value="St Kitts-Nevis">St Kitts-Nevis</option>
									<option value="St Lucia">St Lucia</option>
									<option value="St Maarten">St Maarten</option>
									<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
									<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
									<option value="Saipan">Saipan</option>
									<option value="Samoa">Samoa</option>
									<option value="Samoa American">Samoa American</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome & Principe">Sao Tome & Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syria">Syria</option>
									<option value="Tahiti">Tahiti</option>
									<option value="Taiwan">Taiwan</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania">Tanzania</option>
									<option value="Thailand">Thailand</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad & Tobago">Trinidad & Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks & Caicos Is">Turks & Caicos Is</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Erimates">United Arab Emirates</option>
									<option value="United States of America">United States of America</option>
									<option value="Uraguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Vatican City State">Vatican City State</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Vietnam">Vietnam</option>
									<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
									<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
									<option value="Wake Island">Wake Island</option>
									<option value="Wallis & Futana Is">Wallis & Futana Is</option>
									<option value="Yemen">Yemen</option>
									<option value="Zaire">Zaire</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select>
							</div>
						</div>

						<!--	<div class="col-lg-12">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="checkme" />
								<label class="form-check-label" for="checkme">Keep Me Sign Up</label>
							</div>
						</div> --->

						<div class="col-lg-12">
							<div class="send-btn">
								<button type="submit" class="default-btn">
									Sign Up Now
									<span></span>
								</button>
							</div>
							<br />
							<span>Already a registered user?
								<a href="sign-in.html">Login!</a></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Signup Area -->

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
