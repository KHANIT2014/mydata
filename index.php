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
	<title>Home</title>
	<style>
	#naav{
		/*background-color: #0E204C !important;*/
		background-color: #101010 !important;
	}
	#cont1{
		width: auto !important;
		height: 60vh !important;
	}
	@media(min-width: 500px) AND (max-width: 768px){
		#cont1 * img{
			min-height: 50vh;
			max-height: 50vh;
		}
	}
	@media (max-width: 500px){
		#cont1 * img{
			/* max-height: 91vh; */
			height: 91vh;
		}
		.bottom-link > div{
			padding-bottom: 0.4rem;
		}
		.bottom-link > a{
			text-decoration: none;
			color: white;
			text-
		}
	}
</style>
</head>
<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark" id="naav">

	<div class="container">

		<a href="" class="navbar-brand" title="navbar">Question Paper</a>

		<div class="navbar-toggler" data-toggle="collapse" data-target="#navexpand">

			<div class="navbar-toggler-icon"></div>

		</div>
		<!-- sidenav & nav links -->
		<div class="collapse navbar-collapse justify-content-end" id="navexpand">

			<ul class="navbar-nav mr-3">

				<li class="nav-item"><a href="" class="nav-link">
					home
				</a>
			</li>

			<li class="nav-item dropdown">

				<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					products
				</a>

				<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					<a class="dropdown-item" href="#">
						mobile
					</a>

					<div class="dropdown-divider"></div>

					<a class="dropdown-item" href="#">
						laptop
					</a>

					<div class="dropdown-divider"></div>

					<a class="dropdown-item" href="#">
						talet
					</a>

				</div>
			</li>

			<li class="nav-item"><a href="" class="nav-link">
				contact
			</a>
		</li>

		<li class="nav-item"><a href="" class="nav-link">
			about
		</a>
	</li>

	<?php
	if(isset($_SESSION['uid'])){
	?>

	<li class="nav-item"><a href="login.php" class="nav-link btn btn-outline-danger my-2 my-sm-0">Login
	</a>
</li>

<?php
}
if(!isset($_SESSION['uid'])){
?>

<li class="nav-item"><a href="signup.php" class="nav-link btn btn-outline-danger my-2 my-sm-0">Signup
</a>

<?php
}
?>
</li>
</ul>
</div>
</div>
</nav>

<div class="footer m-0 bg-info py-3">
	<div class="row justify-content-center mx-0 bottom-link">
		<div class="col-sm-12 col-md-auto text-center ">
			<a href="" class="text-light">Terms</a>
		</div>
		<div class="col-sm-12 col-md-auto text-center">
			<a href="">Privacy</a>
		</div>
		<div class="col-sm-12 col-md-auto text-center">
			<a href="">Contact</a>
		</div>
	</div>
	<div class="row justify-content-end mx-0 pr-3">
		created by #Mohid kazi
	</div>
</div>

<body>
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>