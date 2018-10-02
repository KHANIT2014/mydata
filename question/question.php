<?php
ob_start();
require("../config.php");
if (!isset($_SESSION['uid'])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Question Paper</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../css/bootstrap.css" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/index.css">
    <!-- spinner css -->
    <link rel="stylesheet" href="../css/spinner.css">
    <!-- Fint Awesome CSS -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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

  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Question Bank</h3>
            <span>Education</span>
        </div>
        
        <ul class="list-unstyled components">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <select class="form-control" id="course" name="course">
                            <option value="">Course</option>
                            <?php
                            $string = "SELECT * FROM `course`";
                            $temp = $sql->query($string);
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
                <div class="col-sm-6">
                    <div class="form-group">
                        <select class="form-control" id="reference" name="reference">
                            <option value="">References</option>
                            
                        </select>
                    </div>
                </div>
            </div>
        </ul>
        <div class="csqtqstq bg-light text-dark">
        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-red">
                    <i class="fas fa-align-left"></i>
                </button>
                <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: transparent;border-color: grey;">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="question.php">Question Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../terms.php">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../privacy.php">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- //banner-text -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html" class="text-red">Home</a>
            </li>
            <li class="breadcrumb-item active">Question Bank</li>
        </ol>
        <div class="questiondisplay">
          <div class="line"></div>
          <h2 class="text-center"><b>Question</b> will display here</h2>
          <div class="line"></div>
      </div>
  </div>

</div>

<!-- jQuery CDN -->
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<!--   <script src="https://stackpath.botstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
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
                console.log(data);
                $('.questiondisplay').html(data);
                
                //function for time
                function startTimer(duration, display) {
                    var timer = duration, minutes, seconds;
                    setInterval(function () {
                        minutes = parseInt(timer / 60, 10)
                        seconds = parseInt(timer % 60, 10);

                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;

                        display.textContent = minutes + ":" + seconds;

                        if (--timer < 0) {
                            timer = duration;
                        }
                    }, 1000);
                }
                //function for time close
                var oneMinutes = 60 * 1,
                display = document.querySelector('#time');
                startTimer(oneMinutes, display);
            }
            // succes close
        }
        );
        // $.ajax close
    }
    // main function close

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

                        //using level to load value of attempt
                        // $('#level').change(function(){
                        //     var lname = $(this).val();

                        //     $.post(
                        //         "backend.php",
                        //         {lname:lname},
                        //         function(data)
                        //         {
                        //            console.log(data);
                        //            $('#attempt').html(data);
                        //        }
                        //        );
                        // });

                        //using level to load value of subject
                        // $('#level').change(function(){
                        //     var lname = $(this).val();

                        //     $.post(
                        //         "backend.php",
                        //         {lnames:lname},
                        //         function(data)
                        //         {
                        //             console.log(data);
                        //             $('#subject').html(data);
                        //         }
                        //         );
                        // });

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
                                    // console.log("values are : "+data);
                                    $('.csqtqstq').html(data);
                                }
                            }
                            );
                        });
                        
                        // $('.csqtqstq > a.btn').click(function(){
                        //     // var a = $(this).data('question');
                        //     console.log("hello world");
                        //     $(this).addClass('btn-success');
                        //     // console.log(e.target.getAttribute('id'));
                        //     // console.log($(this).attr('id'));
                        //     // console.log(a);
                        // });

                        //css property for navbar
                    });
                </script>

            </body>

            </html>