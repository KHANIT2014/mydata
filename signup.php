<?php
ob_start();
require("config.php");

if(isLoggedIn())
{
	echo "<script>window.location.assign('index.php');</script>";
}

if(isset($_POST['submit']))
{
	$name = secure($_POST['name']);
	$lastname = secure($_POST['lname']);
	$course = secure($_POST['course']);
	$contact = secure($_POST['contact']);
	$youremail = secure($_POST['email']);
	$password = secure($_POST['password']);
	$cpassword = secure($_POST['confirm']);  
	if($password==$cpassword && $password>=6)
	{
		$password = Encrypt($password);
		$string = "INSERT INTO `users`(`name`, `lname`, `CID`,`contact`,`email`, `password`,`date`) VALUES ('$name','$lastname','$course','$contact','$youremail','$password',CURDATE())";
		$temp = $mysqli->query($string);
		if ($temp) 
		{
			header("Location:index.php");
		}
		else
		{
			echo "<script>window.location.assign('signup.php?matchfail');</script>";
		}
	}
	else
	{
		echo "<script>window.location.assign('signup.php?passerror');</script>";
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
	<title>Signup</title>
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
			padding: 5px;
		}
		.cp , .main{
			margin-left: 0;
			margin-right: 0;
		}
		.main{
			margin: 2rem 0;
		}
		.main-center{
			padding: 1rem;
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
				<h2>Registraion <span style="color: #cc2105;">Form</span></h2>
			</div>
			<form method="post" action="signup.php">

				<?php if(isset($_GET['matchfail'])) { ?>   
					<div class="form-group">
						<p class="text-white">Something went wrong</p>
					</div>
				<?php } ?>

				<?php if(isset($_GET['passerror'])) { ?>   
					<div class="form-group">
						<p class="text-white">Passwords does not match or is less than 6 characters.</p>
					</div>
				<?php } ?>

				<div class="form-group">
					<!-- <label for="name" class="cols-sm-2 control-label">Name</label> -->
					<div class="cols-sm-10">
						<div class="input-group">

							<input type="text" class="form-control" name="name" id="name"  placeholder="First Name"/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<!-- <label for="lname" class="cols-sm-2 control-label">Last Name</label> -->
					<div class="cols-sm-10">
						<div class="input-group">
							<input type="text" class="form-control" name="lname" id="lname"  placeholder="Last Name"/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<!-- <label for="email" class="cols-sm-2 control-label">Your Email</label> -->
					<div class="cols-sm-10">
						<div class="input-group">
							<input type="text" class="form-control" name="email" id="email"  placeholder="Email"/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<!-- <label for="course" class="cols-sm-2 control-label">Select Course</label> -->
					<div class="cols-sm-10">
						<div class="input-group">
							<select class="form-control" id="sel1" name="course">
								<option class="bg-light">Select Course</option>
								<?php
								$string = "SELECT * FROM `course`";
								$result = $mysqli->query($string);
								while($row = $result->fetch_row()) 
									{ ?>
										<option value="<?php echo $row[0]; ?>" class="bg-light"><?php echo $row[1]; ?></option>
										<?php
									}   
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="text" class="form-control" name="contact" id="contact"  placeholder="Contact"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="password" class="form-control" name="password" id="password"  placeholder="Password"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
								<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm Password"/>
							</div>
						</div>
						<small>atleast 6 character required</small>
					</div>
					<div class="form-group jar ">
						<button type="submit" name="submit" id="button" class="btn btn-lg btn-block btn-outline-light">Register</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- footer starts here -->
	<div class="footer m-0 bg-black py-3">

		<!-- alternate to footer nav-link -->
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

		<div class="row justify-content-center justify-content-sm-end mx-0 pr-3 text-danger">
			&copy; 2018-2019 , created by &nbsp<a href="http://www.hertzsoft.com" class="text-light">Hertzsoft</a>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>