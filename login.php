<?php
ob_start();
require("config.php");

if(isset($_SESSION['uid'])){
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link rel="icon" href=""> -->
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/navfoot.css">
  <link href="css/sign.css" rel="stylesheet">
</head>
<body>
  <!-- navbar starts here -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="naav">

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
            <a href="about.php" class="nav-link">
              About
            </a>
          </li>

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

        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- form starts here -->
<div class="body text-center">
  <form class="form-signin" action="login.php" method="post">
    <?php
    if (!isset($_GET['incorrect'])) {
      ?>
      <h1 class="h3 mb-3 font-weight-normal">
        Please Login
      </h1>
      <?php
    }
    if (isset($_GET['incorrect'])) {
      ?>
      <div class="alert alert-danger" role="alert">
        Username OR Password Incorrect!!!
      </div>
      <?php
    }
    ?>
    <label for="inputEmail" class="sr-only">
      Email address
    </label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus />
    <label for="inputPassword" class="sr-only">
      Password
    </label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required />
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" name="remember"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-danger btn-block" type="submit" name="submit">Sign in</button>
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
  </form>
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

<?php 
if (isset($_POST['submit'])) {
  $email = secure($_POST['email']);
  $password = secure($_POST['password']);
  $remember = secure($_POST['remember']);

  $string = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
  $temp = $mysqli->query($string);

  if($demo = $temp->fetch_assoc())
  {
    if ($remember) {
      setcookie("uid" ,$demo['UID'], time()+60*5);
    }
    $_SESSION['uid'] = $demo['UID'];
    header("location:index.php");
  }
  else
  {
    header("location:login.php?incorrect");
  }
}
?>
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>