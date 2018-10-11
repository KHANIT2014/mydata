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
	<title>Contact</title>
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
					
					if(isset($_SESSION['uid'])){
						?>

						<li class="nav-item dropdown">
							<a href="#" class="nav-link btn btn-outline-danger my-2 my-sm-0" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Welcome , <?php 
								$string = "SELECT * FROM `users` WHERE UID=$_SESSION[uid]";
								$temp = $mysqli->query($string);
								if($demo = $temp->fetch_row()){
								echo "$demo[1] $demo[2]";
								}
								 ?>
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown1">

								<a href="changep.php" class="dropdown-item">
									Change Password
								</a>

								<div class="dropdown-divider"></div>

								<a href="logout.php" class="dropdown-item">
									Logout
								</a>
							</div>
						</li>
						<?php
					}
					?>

				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- footer starts here -->
<div class="footer m-0 bg-black py-3">

	<div class="row justify-content-center mx-0 bottom-link">
		<div class="col-2 col-md-auto text-center ">
			<a href="terms.php">Terms</a>
		</div>
		<div class="col-3 col-md-auto text-center ">
			<a href="disclaimer.php">Disclaimer</a>
		</div>
		<div class="col-2 col-md-auto text-center">
			<a href="privacy.php">Privacy</a>
		</div>
		<div class="col-2 col-md-auto text-center">
			<a href="cookie.php">Cookie</a>
		</div>
		<div class="col-3 col-md-auto text-center">
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