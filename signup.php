<?php
require("config.php");
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    echo "<script>console.log(".$name.");</script>";
    $lastname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];
    $youremail = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm'];  
    if($password==$cpassword && $password>=6)
    {
        $sql = "INSERT INTO `users`(`name`, `lname`, 
        `CID`,`contact`,`email`, `password`,`date`
    ) VALUES ('$name','$lastname','$course','$contact','$youremail','$password',CURDATE())";
    $res = $mysqli->query($sql);
    if ($res) {

        header("Location:index.php");
    }
    else
    {
        echo "<script>alert('Error!!! please try again');</script>";
    }
}
else
{
    echo "<script>alert('Password does not match!!!');</script>";
}
}
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Sign Up</title>
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
    <!-- spinner css -->
    <link rel="stylesheet" href="css/spinner.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
<div class="inner-banner">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
         <h1><a class="navbar-brand" href="index.php">Question Bank
             <span>Education</span>
         </a></h1>

         <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item ">
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
</div>
<!-- //banner-text -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">signup</li>
</ol>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <div class="text-center py-2">
                <h2>Registraion <span style="color: #cc2105;">Form</span></h2>
            </div>
            <form class="" method="post" action="signup.php">

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
                                $result = $sql->query($string);
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
                        <!-- <label for="contact" class="cols-sm-2 control-label"> contact</label> -->
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="contact" id="contact"  placeholder="Contact"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="password" class="cols-sm-2 control-label">Password</label> -->
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Password"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label> -->
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm Password"/>
                            </div>
                        </div>
                        <small>atleast 6 character required</small>
                    </div>
                    <div class="form-group raj ">
                        <button type="submit" name="submit" id="button" class="btn btn-lg btn-block login-button">Register</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
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
                <form action="" method="post">
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
<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
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
    $('#password').on('change',function(){

        if($(this).val().length < 5){
            $(this).css('background-color','red');            }    
        });
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
        });
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