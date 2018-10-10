<?php
ob_start();
require("config.php");
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/navfoot.css">
	<title>Disclaimer</title>
	<style>
	
</style>
</head>
<body>
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-black0">

		<div class="container">

			<a href="" class="navbar-brand" title="navbar">Question Paper</a>

			<div class="navbar-toggler" data-toggle="collapse" data-target="#navexpand">

				<div class="navbar-toggler-icon"></div>

			</div>
			<!-- sidenav & nav links -->
			<div class="collapse navbar-collapse justify-content-end" id="navexpand">

				<ul class="navbar-nav mr-3">

					<li class="nav-item">
						<a href="index.php" class="nav-link">
							Home
						</a>
					</li>
					
					<li class="nav-item">
						<a href="question/question.php" class="nav-link">
							Question Paper
						</a>
					</li>

					<li class="nav-item">
						<a href="about.php" class="nav-link">
							About
						</a>
					</li>

					<?php
					if(!isset($_SESSION['uid'])){
						?>
						<li class="nav-item dropdown">

							<a href="#" class="nav-link btn btn-outline-danger my-2 my-sm-0" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">

								<a class="dropdown-item" href="login.php">
									Login
								</a>

								<div class="dropdown-divider"></div>

								<a class="dropdown-item" href="signup.php">
									Signup
								</a>

							</div>
						</li>
						<?php
					}
					?>

					<?php
					if(isset($_SESSION['uid'])){
						?>

						<li class="nav-item">
							<a href="logout.php" class="nav-link btn btn-outline-danger my-2 my-sm-0">
								Logout
							</a>
						</li>
						<?php
					}
					?>

				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- content starts here -->
<div class="container my-5" style="text-align: justify;">
	<h2>Disclaimer</h2>
	By using the services of <a href="http://www.caexamclub.com">caexamclub.com</a>, you expressly understand and agree that:
	</br>
	<p>Your use of the service is solely at your own risk. The service is provided as an "as is" and
		"as available" basis only. <a href="http://www.caexamclub.com">caexamclub.com</a> expressly disclaims all warranties of any kind,
		whether express or implied, including, but not limited to the implied warranties of
	merchantability, fitness for a particular purpose and non-infringement.</p>
	<a href="http://www.caexamclub.com">caexamclub.com</a> makes no warranty/guarantee that
	<div class="container">
		<ol type="i" style="">
			<li>The service will meet your requirements</li>
			<li>The service will be uninterrupted, timely, secure, or error free.</li>
			<li>The information on this Website is complete, true, accurate or non-misleading.</li>
			<li>The quality of any products, services, information, or other material purchased or
			obtained by you through the use of the service will meet your expectations.</li>
			<li>Any errors in the software will be corrected.</li>
			<li>Any material downloaded or otherwise obtained through the use of the service is done
				at your own discretion and risk that you will be solely responsible for any damage to your
			computer system or loss of data that results from the download of any such material.</li>
			<li>The results that may be obtained from the use of this service will be accurate or reliable.</li>
		</ol>
	</div>
	</br>
	<p>No Advice or information, whether oral or written obtained by you from <a href="http://www.caexamclub.com">caexamclub.com</a>, or
		through the service shall create any warranty/liability against <a href="http://www.caexamclub.com">caexamclub.com</a> or any of its
	owners.</p>
	<p>The material contained on this site and on the associated web pages is general information
		and is not intended to be advice on any particular matter. Subscribers and readers should seek
		appropriate professional advice before acting on the basis of any information contained
		herein. <a href="http://www.caexamclub.com">caexamclub.com</a>, its members, owners, employees, agents, representatives and the
		authors expressly disclaim any and all liability to any person, whether a subscriber or not, in
		respect of anything and of the consequences of anything done or omitted to be done by any
	such person in reliance upon the contents of this site and associated web pages.</p>
</div>
<!-- footer starts here -->
<div class="footer m-0 bg-black py-3">

	<div class="row justify-content-center mx-0 bottom-link">
		<div class="col-sm-12 col-md-auto text-center ">
			<a href="terms.php">Terms</a>
		</div>
		<div class="col-sm-12 col-md-auto text-center ">
			<a href="disclaimer.php">Disclaimer</a>
		</div>
		<div class="col-sm-12 col-md-auto text-center">
			<a href="privacy.php">Privacy</a>
		</div>
		<div class="col-sm-12 col-md-auto text-center">
			<a href="cookie.php">Cookie</a>
		</div>
		<div class="col-sm-12 col-md-auto text-center">
			<a href="contact.php">Contact</a>
		</div>
	</div>

	<div class="row justify-content-end mx-0 pr-3 text-danger">
		&copy; 2018-2019 , created by &nbsp<a href="http://www.hertzsoft.com" class="text-light">Hertzsoft</a>
	</div>

</div>

<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>