<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Question Bank</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
  include_once("config.php");

  // If already logged in goto index.php
  if(isLoggedIn())
  {
    header("location:index.php");
  }

  // Login Button Pressed
  if(isset($_POST['login']))
  {
    $email = secure($_POST['email']);
    $password = secure($_POST['password']);
    $password = Encrypt($password);
    
    // Step 1: Email Verification
    $sql = "SELECT * FROM `admin` WHERE `email`='$email'";
    $result = $mysqli->query($sql);
    
    if($row = $result->fetch_assoc())
    {
      // Step 2: Password Verification
      $sql = "SELECT * FROM `admin` WHERE `email`= '".$row['email']."' AND `password`='$password'";
      $pass_result = $mysqli->query($sql);
            
      if($pass_row = $pass_result->fetch_assoc())
      {
        $_SESSION['aid'] = $row['email'];
        if(isset($_POST['remember_me']))
        {
          setcookie("aid" , $row['email'] , time()+60*5);
        }
        header("Location:index.php");
        exit();
      }
      else
      {
        header("Location:login.php?wrongpass");
        exit();
      }
    }
    else
    {
      header("Location:login.php?noexists");
      exit();
    }
  }
?>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login to Question Bank - Admin Panel</h4>
								<?php if(isset($_GET['noexists'])) { ?>
								<div class="alert alert-danger">
								  <strong>Sorry!</strong> Email Address does not exists.
								</div>
								<?php } ?>
								<?php if(isset($_GET['wrongpass'])) { ?>
								<div class="alert alert-danger">
								  <strong>Sorry!</strong> Password Entered is incorrect.
								</div>
								<?php } ?>
								<?php if(isset($_GET['logout'])) { ?>
								<div class="alert alert-success">
								  <strong>Logged Out Successfully!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['changed'])) { ?>
								<div class="alert alert-success">
								  <strong>Password Changed!</strong> Please login back to continue.
								</div>
								<?php } ?>
                                <form action="login.php" method = "post">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
        										<input type="checkbox" name="remember_me"> Remember Me
										</label>
                                        <label class="pull-right">
        										<a href="#">Forgotten Password?</a>
										</label>
                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>