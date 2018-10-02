<?php
require("config.php");

  // If already logged in goto index.php
					// if(isset($_SESSION['id']))
					// {
					// 	header("location:index.php");
					// }

  // Login Button Pressed
if(isset($_POST['submit']))
{
	$email = ($_POST['email']);
	$password = ($_POST['password']);

	$string = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
	$temp = $sql->query($string);
	if($demo = $temp->fetch_assoc())
	{
		$_SESSION['uid'] = $demo['email'];
		setcookie("uid" , $demo['email'] , time()+60*5);
		header("Location:index.php");
	}
	else
	{
		echo "<script>alert('Username or Password incorrect');</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Question Paper</title>
	<link rel="stylesheet" type="text/css" href="body.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta name="keywords" content="Subject Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- spinner css -->
	<link rel="stylesheet" href="css/spinner.css">
	<!-- Testimonials-Css -->
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
	<!--CSS Spinner-->
	<div class="spinner-wrapper">
		<div class="sk-fading-circle">
			<div class="sk-circle1 sk-circle"></div>
			<div class="sk-circle2 sk-circle"></div>
			<div class="sk-circle3 sk-circle"></div>
			<div class="sk-circle4 sk-circle"></div>
			<div class="sk-circle5 sk-circle"></div>
			<div class="sk-circle6 sk-circle"></div>
			<div class="sk-circle7 sk-circle"></div>
			<div class="sk-circle8 sk-circle"></div>
			<div class="sk-circle9 sk-circle"></div>
			<div class="sk-circle10 sk-circle"></div>
			<div class="sk-circle11 sk-circle"></div>
			<div class="sk-circle12 sk-circle"></div>
		</div>
	</div>

	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
				<h3><a class="navbar-brand" href="index.php">Question Bank
					<span>Education</span>
				</a></h3>

				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="question/question.php">Question Bank</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="terms.php">Terms</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="privacy.php">Privacy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
					<?php
					if (!isset($_SESSION['uid'])) {
						?>
						<li class="nav-item">
							<a class="nav-link" href="signup.php">Signup</a>
						</li>
						<?php
					}
					if (isset($_SESSION['uid'])) {
						?>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</nav>
	</header>
	<!-- //header -->
	<div class="container">
		<!-- banner-text -->
		<div class="banner-text">
			<div class="slider-info">
				<h3>What would <span>you like </span> to learn?</h3>
			</div>
		</div>
	</div>
</div>
<!-- //banner-text -->
<!--banner form-->
<section class="banner_form py-5">
	<div class="container py-lg-3">
		<div class="row ban_form">
			<div class="col-lg-8 bg-white fom-left">
				<div class="categories_sub cats1">
					<h2 class="heading-agileinfo">Welcome To <span> Education</span></h2>
					<p class="vam">Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Sed lorem enim, Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Sed lorem enim, </p></div>
				</div>

				<?php
				if (!isset($_SESSION['uid'])) {
					?>
					<div class="col-lg-4 reg-fom ">
						<h4 class="text-center" style="color: #cc2105;">Login</h4>

						<form action="index.php" method="post">
							<div class="reg-fom-btm mt-5">
								<div class="fields">
									<div class="form-group">
										<label for="email" class="cols-sm-2 control-label text-white">Email</label>
										<div class="cols-sm-10">
											<div class="input-group">
												<span class="input-group-addon">
												</span>
												<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email"/>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="password" class="cols-sm-2 control-label text-white">Password</label>
										<div class="cols-sm-10">
											<div class="input-group">
												<span class="input-group-addon">
												</span>
												<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
											</div>
										</div>
									</div>
									<div class="forgot">
										<a href="signup.php">Forgot password?</a>
										<div class="form-group index">
											<button name="submit" type="submit" id="button" class="btn btn-lg btn-block login-button text-dark btn-color black">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<?php
					} ?>

				</section>
				<!--//banner form-->
				<!-- /services -->
				<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
					<div class="container">
						<div class="inner-sec-w3ls py-lg-5 py-3">
							<h3 class="heading-agileinfo text-center">What <span> We do</span></h3>
							<div class="row middle-grids mt-md-5 pt-4">
								<div class="col-lg-4 about-in-w3ls middle-grid-info text-center">
									<div class="card">
										<div class="card-body">
											<i class="fas fa-graduation-cap mb-2"></i>
											<h5 class="card-title text-uppercase my-3">
											Professional Study</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
											</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 about-in-w3ls middle-grid-info active text-center">
									<div class="card">
										<div class="card-body">
											<i class="fas fa-book mb-2"></i>
											<h5 class="card-title text-uppercase my-3">Summer Session</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
											</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 about-in-w3ls middle-grid-info text-center">
									<div class="card">
										<div class="card-body">
											<i class="fas fa-globe mb-2"></i>
											<h5 class="card-title text-uppercase my-3">Global Education</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- //services -->
				<!-- choose -->
				<section class="choose py-5">
					<div class="container py-md-4 mt-md-3"> 
						<div class="row inner_w3l_agile_grids-1 ">
							<div class="col-lg-6 w3layouts_choose_left_grid1">
								<div class="choose_top">
									<h4 class="mb-3 mt-3 text-white">Feel Free to Contact Our Agents Directly</h4>
									<p class="text-white">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.</p>
									<a href="services.html" class="btn btn-primary mt-3">Read More</a>
								</div>
							</div>
							<div class="col-lg-6 w3layouts_choose_left_grid2">
								<div class="row">
									<div class="col-md-6 w3l_choose_bottom1 mt-3 pt-md-4">
										<div class="choose_bottom_top">
											<i class="fas fa-globe mb-2"></i>
											<h5 class="card-title text-uppercase my-3">Education</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
											</p>
										</div>
									</div>
									<div class="col-md-6 w3l_choose_bottom2">
										<div class="choose_bottom_top">
											<i class="fas fa-book mb-2"></i>
											<h5 class="card-title text-uppercase my-3">Education</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
											</p>
										</div>
									</div>
									<div class="col-md-6 w3l_choose_bottom3 mt-3 pt-md-4">
										<div class="choose_bottom_top">
											<i class="fas fa-graduation-cap mb-2"></i>
											<h5 class="card-title text-uppercase my-3">Education</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
											</p>
										</div>
									</div>
									<div class="col-md-6 w3l_choose_bottom4">
										<div class="choose_bottom_top">
											<i class="fas fa-globe mb-2"></i>
											<h5 class="card-title text-uppercase my-3">Education</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>   
				</section>
				<!-- //choose -->
				<!-- /advantage -->
				<section class="banner-bottom py-lg-5 py-md-5 py-3">
					<div class="container">
						<div class="inner-sec py-lg-5 py-3">
							<h3 class="heading-agileinfo text-center">Our <span> Advantages</span></h3>
							<div class="row middle-grids mt-lg-5 pt-5">
								<div class="col-lg-6 advantage-grid-info1">
									<div class="advantage_left1 text-center">
										<img src="images/p1.jpg" class="img-fluid" alt="">
									</div>
								</div> 
								<div class="col-lg-6 advantage-grid-info pt-md-5">
									<div class="advantage_left">
										<h4 class="mb-2">Integer porttitor mollisar</h4>
										<h3>Laoreet Eleifend</h3>
										<p class="mt-2">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.</p>
									</div>
								</div>
							</div>
							<div class="row middle-grids pt-lg-5">
								<div class="col-lg-6 advantage-grid-info pt-md-5 mt-md-5">
									<div class="advantage_left">
										<h4 class="mb-2">Integer porttitor mollisar</h4>
										<h3>Pellentesque mi non</h3>
										<p class="mt-2">Nulla pellentesque mi non laoreet eleifend. Integer porttitor mollisar lorem, at molestie arcu pulvinar ut. Proin ac fermentum est. Cras mi ipsum, consectetur ac ipsum in, egestas vestibulum tellus.</p>
									</div>
								</div>
								<div class="col-lg-6 advantage-grid-info1">
									<div class="advantage_left2 text-center">
										<img src="images/g1.jpg" class="img-fluid" alt="">
									</div>
								</div> 
							</div>
						</div>
					</div>
				</section>
				<!-- //advantage -->
				<!-- feedback -->
				<section class="news py-5">
					<div class="container py-xl-5 py-lg-3">
						<h3 class="heading-agileinfo text-white text-center">Recent <span> FeedBack</span></h3>
						<div class="owl-carousel owl-theme mt-md-5 pt-4">
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te1.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Mary Jane</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te3.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Olivia Ruth</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te2.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Blake Joe</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te4.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Mary Jane</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te5.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Olivia Ruth</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te6.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Blake Joe</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te1.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Mary Jane</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te3.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Olivia Ruth</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="feedback-info bg-white py-5 px-4">
									<h4 class="mb-2">Tempor incididunt ut labore hytnm
									</h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo.</p>
									<div class="feedback-grids mt-4">
										<div class="feedback-img">
											<img src="images/te2.jpg" class="img-fluid rounded-circle" alt="" />
										</div>
										<div class="feedback-img-info">
											<h5>Blake Joe</h5>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- //feedback -->
				<!-- stats -->
				<section class="stats py-5">
					<div class="container py-md-5">
						<h3 class="heading-agileinfo text-center">Our  <span>Achievements</span></h3>
						<span class="w3-line black"></span>	
						<div class="row inner_w3l_agile_grids-1 pt-md-5 mt-4">
							<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid">
								<i class="fas fa-trophy mb-2"></i>
								<p class="counter">2001</p>
								<h3>Year of Foundation</h3>
							</div>
							<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid1">
								<i class="fas fa-graduation-cap mb-2"></i>
								<p class="counter">765</p>
								<h3>Graduates</h3>
							</div>
							<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
								<i class="fas fa-user mb-2"></i>
								<p class="counter">125</p>
								<h3>Certified Staff</h3>
							</div>
							<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
								<i class="fas fa-users mb-2"></i>
								<p class="counter">150</p>
								<h3>Students</h3>
							</div>
						</div>
					</div>	
				</section>
				<!-- //stats -->
				<!--/newsletter-->
				<footer class="newsletter_right pymd-5 py-4" id="footer">
					<div class="container">
						<div class="inner-sec py-md-5 py-3">
							<div class="row mb-md-4 mb-md-3">
								<div class="col-lg-3 col-md-6 social-info text-left">
									<h3 class="tittle1 foot mb-md-5 mb-4 text-white">Get in touch</h3>
									<p>0926k 4th block building,king Avenue, </p>
									<p class="my-2"> New York City,USA</p>
									<p class="phone">phone: +0444 555 6789</p>
									<p class="phone my-2">Fax: +0444 555 6789</p>
									<p class="phone">Mail:
										<a href="mailto:info@example.com">info@example.com</a>
									</p>

								</div>
								<div class="col-lg-3 col-md-6 social-info text-left">
									<h3 class="tittle1 foot mb-md-5 mb-4 text-white">About Us</h3>
									<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus.
									Nulla porttitor accumsana tincidunt. Vestibulum ante ipsum primis tempus convallis.</p>

								</div>
								<div class="col-lg-6 col-md-12 n-right tex-left">
									<h3 class="tittle1 foot mb-md-5 mb-4 text-white">Subscribe our Newsletter</h3>
									<form action="#" method="post">
										<div class="form-group d-flex">
											<input class="form-control" type="email" name="Email" placeholder=" Email Address" required="">
											<input class="form-control submit text-uppercase" type="submit" value="Subscribe">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<div class="copyright py-3">
					<div class="container">
						<div class="row">
							<div class="col-md-8">      
								<p class="copy-right mt-2">© 2018 Subject. All Rights Reserved | Design by
									<a href="http://w3layouts.com/"> W3layouts </a>
								</p>
							</div>
							<div class="col-md-4">
								<ul class="social-icons scial justify-content-end">
									<li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
									<li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
									<li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
									<li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--//newsletter-->

				<!-- js -->
				<script src="js/jquery-2.2.3.min.js"></script>
				<!-- //js -->
				<!-- carousel(for feedback) -->
				<script src="js/owl.carousel.js"></script>
				<script>
					//Preloader
					$(window).on("load", function() {
						var preloaderFadeOutTime = 500;
						function hidePreloader() {
							var preloader = $('.spinner-wrapper');
							preloader.fadeOut(preloaderFadeOutTime);
						}
						hidePreloader();
					});
					$(document).ready(function () {
						$('.owl-carousel').owlCarousel({
							loop: true,
							margin: 10,
							responsiveClass: true,
							responsive: {
								0: {
									items: 1,
									nav: true
								},
								600: {
									items: 2,
									nav: false
								},
								1000: {
									items: 3,
									nav: true,
									loop: false,
									margin: 20
								}
							}
						})
					})
				</script>

				<!-- //carousel(for feedback) -->
				<!-- stats -->
				<script src="js/jquery.waypoints.min.js"></script>
				<script src="js/jquery.countup.js"></script>
				<script>
					$('.counter').countUp();
				</script>
				<!-- //stats -->

				<!-- start-smooth-scrolling -->
				<script src="js/move-top.js"></script>
				<script src="js/easing.js"></script>
				<script>
					jQuery(document).ready(function ($) {
						$(".scroll").click(function (event) {
							event.preventDefault();

							$('html,body').animate({
								scrollTop: $(this.hash).offset().top
							}, 1000);
						});
					});
				</script>
				<!-- //end-smooth-scrolling -->
				<!-- smooth-scrolling-of-move-up -->
				<script>
					$(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
            	easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="js/bootstrap.js"></script>
    </body>
    </html>