<?php
ob_start();
require("config.php");
if(!isLoggedIn()){

	// echo "<script>window.location.assign('index.php');</script>";
	header("location:index.php");
}

//change password
if(isset($_POST['submit']))
{
	$uid = $_SESSION['uid'];
	$current = secure($_POST['current']);
	$newpassword = secure($_POST['newpassword']);
	$confirmpassword = secure($_POST['cpassword']);
// $current = Encrypt($current);
	if($newpassword==$confirmpassword)
	{
		$string = "SELECT * FROM `users` WHERE `email`='$uid' AND `password`='$current'";
		$temp = $mysqli->query($string);
		if($row = $temp->fetch_assoc())
		{
// Step 2: Change Password
// $newpassword = Encrypt($newpassword);
			$mysqli = "UPDATE `users` SET `password`='$newpassword' WHERE `email`='$uid';";
			$pass_result = $mysqli->query($mysqli);
			session_destroy();
			setcookie("uid" , "" , time()-60*5);
			header("Location:index.php?passchange");
		}
		else
		{
			header("Location:changep.php?wrongpass");
			exit();
		}
	}
	else {
		header("Location:changep.php?passmismatch");
	}
}
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
	<title>Change Password</title>
	<style>
	.main-center {
		margin-top: 2rem;
		margin: 0 auto;
		width: 500px;
		max-width: 500px;
		padding: 2rem 2.5rem;
		background: #101010;
		color: #FFF;
		text-shadow: none;
		-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
		-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
		box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
	}
	.main {
		margin: 5rem 15px;
	}
	.jar {
		width: 200px;
		margin: auto;
	}
	/*for mobile devices*/
	@media(max-width: 500px){
		.cp{
			/*padding: 0;*/
		}
		.cp , .main{
			margin-left: 0;
			margin-right: 0;
		}
	}
	/*for fablets*/
	@media (max-width: 700px) AND (min-width: 500px){
		.main{
			margin: 10.3rem 15px;
		}
	}
	/*for tablets*/
	@media (max-width: 800px) AND (min-width: 700px){
		.main{
			margin: 15.3rem 15px;
		}
	}
	/*for ipad landscape*/
	@media (width: 1024px) AND (height: 768px){
		.main{
			margin: 6.2rem 15px;
		}
		.main-center{
			padding: 3rem 3rem;
		}
	}
	/*for ipad pro*/
	@media (width: 1024px) AND (height: 1366px){
		.main{
			margin: 22.9rem 15px;
		}
		.main-center{
			padding: 5rem 3rem;
		}
	}
	/*for ipad pro landscape*/
	@media (width: 1366px) AND (height: 1024px){
		.main{
			margin: 12.2rem 15px;
		}
		.main-center{
			padding: 5rem 3rem;
		}
	}

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
						<a href="index.php" class="nav-link text-light">
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
<!-- content starts here -->
<div class="container cp">
	<div class="row main">
		<div class="main-login main-center">
			<div class="text-center py-2">
				<h2>Recover <span style="color: #cc2105;">Password</span></h2>
			</div>
			<form method="post" action="changep.php">
				<?php if(isset($_GET['noexists'])) { ?>
					<div class="alert alert-danger text-center" role="alert">
						Email account does not Exist!!!
					</div>
				<?php } ?>
				<?php if(isset($_GET['wrongpass'])) { ?>
					<div class="alert alert-danger text-center" role="alert">
						Current Password Incorrect!!!
					</div>
				<?php } ?>
				<?php if(isset($_GET['passmismatch'])) { ?>
					<div class="alert alert-danger text-center" role="alert">
						Password does not Match!!!
					</div>
				<?php } ?>
				<div class="form-group">
					<!-- <label for="email" class="cols-sm-2 control-label">Your Email</label> -->
					<div class="cols-sm-10">
						<div class="input-group">
							<input type="password" class="form-control" name="current" id="current"  placeholder="Current Password"/>
						</div>
						<p class="text-white">Current Password</p>
					</div>
					<div class="cols-sm-10">
						<div class="input-group">
							<input type="password" class="form-control" name="newpassword" id="newpassword"  placeholder="New Password"/>
						</div>
						<p class="text-white">New Password</p>
					</div>
					<div class="cols-sm-10">
						<div class="input-group">
							<input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="Confirm Password"/>
						</div>
						<p class="text-white">Confirm Password</p>
					</div>
				</div>
				<div class="form-group jar">
					<button type="submit" name="submit" id="button" class="btn btn-block btn-outline-light">Change Password</button>
				</div>

			</form>
		</div>
	</div>
</div>



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