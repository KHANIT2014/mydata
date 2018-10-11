<?php
ob_start();
require("../config.php");
// if (!isset($_SESSION['uid'])) {
//     header("location:../index.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Question Paper</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/index.css">
    <!-- nav and footer style -->
    <link rel="stylesheet" href="../css/navfoot.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
    
</style>
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
         <a href="" class="navbar-brand" title="navbar">Question Paper</a>
     </div>
     
     <ul class="list-unstyled components">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" id="course" name="course">
                        <option value="">Course</option>
                        <?php
                        $string = "SELECT * FROM `course`";
                        $temp = $mysqli->query($string);
                        while($demo = $temp->fetch_row()){
                            ?> 
                            <option value="<?php echo $demo[1]; ?>"><?php echo $demo[1]; ?></option> 
                            <?php 
                        }
                        ?> 
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" id="level" name="level">
                        <option value="">Level</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" id="attempt" name="attempt">
                        <option value="">Attempt</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" id="reference" name="reference">
                        <option value="">References</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" id="subject" name="subject">
                        <option value="">Subject</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" id="topic" name="topic">
                        <option value="">Topic</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" id="subtopic" name="subtopic">
                        <option value="">Sub-Topic</option>
                    </select>
                </div>
            </div>
        </div>
    </ul>
    <div class="csqtqstq">
    </div>
</nav>

<!-- Page Content  -->
<div id="content">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black0">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-red">
                <i class="fas fa-align-left"></i>
            </button>
            <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: transparent;border-color: grey;">
                <i class="fas fa-align-justify text-light"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="question.php" class="nav-link text-light">
                            Question Paper
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="../about.php" class="nav-link">
                            About
                        </a>
                    </li>

                    <?php
                    if(!isset($_SESSION['uid'])){
                        ?>
                        <li class="nav-item dropdown">

                            <a href="#" class="nav-link btn btn-outline-danger my-sm-0" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="../login.php">
                                    Login
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="../signup.php">
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

                                <a href="../changep.php" class="dropdown-item">
                                    Change Password
                                </a>

                                <div class="dropdown-divider"></div>

                                <a href="../logout.php" class="dropdown-item">
                                    Logout
                                </a>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="questiondisplay">
      <div class="line"></div>
      <h2 class="text-center"><b>Question</b> will display here</h2>
      <div class="line"></div>
  </div>
</div>
<!-- content closes here -->
</div>

<!-- wrapper closes here -->
<!-- footer starts here -->
<div class="footer m-0 bg-black py-3" >

    <div class="row justify-content-center mx-0 bottom-link">
        <div class="col-2 col-md-auto text-center ">
            <a href="../terms.php">Terms</a>
        </div>
        <div class="col-3 col-md-auto text-center ">
            <a href="../disclaimer.php">Disclaimer</a>
        </div>
        <div class="col-2 col-md-auto text-center">
            <a href="../privacy.php">Privacy</a>
        </div>
        <div class="col-2 col-md-auto text-center">
            <a href="../cookie.php">Cookie</a>
        </div>
        <div class="col-3 col-md-auto text-center">
            <a href="../contact.php">Contact</a>
        </div>
    </div>

    <div class="row justify-content-end mx-0 pr-3 text-danger">
        &copy; 2018-2019 , created by &nbsp<a href="http://www.hertzsoft.com" class="text-light">Hertzsoft</a>
    </div>
</div>

<!-- jQuery -->
<script
src="../js/jquery.js"></script>
<!-- Popper.JS -->
<script src="../js/popper.js"></script>
<!-- Bootstrap JS -->
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">

    function view(QID,STID)
    {
        // alert(QID);
        $.ajax(
        {
            type : "POST",
            datatype : "json",
            url : "backend.php",
            data : {
                qid : QID,
                stid : STID
            },
            success : function(data)
            {
                // console.log(data);
                $('.questiondisplay').html(data);

                //function for time 
                var minutesLabel = document.getElementById("minutes");
                var secondsLabel = document.getElementById("seconds");
                var totalSeconds = 0;
                setInterval(setTime, 1000);

                function setTime() {
                  ++totalSeconds;
                  secondsLabel.innerHTML = pad(totalSeconds % 60);
                  minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
              }

              function pad(val) {
                  var valString = val + "";
                  if (valString.length < 2) {
                    return "0" + valString;
                } else {
                    return valString;
                }
            }
            setTimeout(function(){
                totalSeconds = "";
                secondsLabel.innerHTML = pad(totalSeconds % 60);
                minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
            }, 60000);

            //adapt
            $('.adapt').click(function(){
                var a = $('#ansTime').text();
                $('#ansTime').text(a);
            });

        }
            // succes close
        }
        );
        // $.ajax close
    }
    // main function close
    $(document).ready(function () {
        // to toggle sidebar
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            
        });
        /*-----------------------------------------ajax starts here-------------------------------------*/
                    //using course to load value of level
                    $('#course').change(function(e){
                        e.preventDefault();
                        var cname = $(this).val();
                        $.post(
                            "backend.php",
                            {course : cname},
                            function(data)
                            {
                                var Data = JSON.parse(data);
                                $('#level').html('<option selected>Level</option><br>'+Data[0]);
                                $('#reference').html('<option selected>Reference</option><br>'+Data[1]);
                            }
                            );
                    });

                        //loading value of subject and attempt using .ajax()
                        $('#level').change(function(e){
                            e.preventDefault();
                            var lname = $(this).val();

                            $.ajax({
                                type : "POST",
                                datatype : "json",
                                url : "backend.php",
                                data : {
                                    lname : lname
                                },
                                success : function(data){
                                    var Data = JSON.parse(data);
                                    $('#attempt').html('<option selected>Attempt</option><br>'+Data[0]);
                                    $('#subject').html('<option selected>Subject</option><br>'+Data[1]);
                                }
                            });
                        });

                        //loading value of topic using subject
                        $('#subject').change(function(){
                            var sname = $(this).val();
                            $.post(
                                "backend.php",
                                {sname : sname},
                                function(data)
                                {
                                    // console.log(data);
                                    $('#topic').html('<option selected>Topic</option><br>'+data);
                                }
                                );
                        }) ;

                        // loading value of sub-topic using subject
                        $('#topic').change(function(){
                            var tname = $(this).val();

                            $.post(
                                "backend.php",
                                {tname : tname},
                                function(data)
                                {
                                    // console.log(data);
                                    $('#subtopic').html('<option selected>Sub-Topic</option>'+data);
                                }
                                );
                        });

                        //loading multiple values for question
                        $('#subtopic').change(function(){
                            var stname = $(this).val();

                            $.ajax(
                            {
                                type : "POST",
                                url : "backend.php",
                                datatype : "json",
                                data :
                                {
                                    stname : stname
                                },
                                success : function(data)
                                {
                                    if(data){
                                        $('.csqtqstq').css("background-color","#CBCBCB");
                                    }
                                    $('.csqtqstq').html(data);
                                }
                            }
                            );
                        });
                        
                    });

                </script>

            </body>

            </html>