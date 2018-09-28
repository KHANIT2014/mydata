<?php 
require("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Question Paper</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="index.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Question Paper</h3>
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
            <div class="container-fluid">
                <div class="">
                    <table class="table text-center table-stripped table-responsive">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Sr</th>
                                <th>Name</th>
                                <th>Roll</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sr</td>
                                <td>Name</td>
                                <td>Roll</td>
                                <td>Sr</td>
                                <td>Name</td>
                                <td>Roll</td>

                            </tr>
                            <tr>
                                <td>Sr</td>
                                <td>Name</td>
                                <td>Roll</td>
                                <td>Sr</td>
                                <td>Name</td>
                                <td>Roll</td>
                            </tr>
                            <tr>
                                <td>Sr</td>
                                <td>Name</td>
                                <td>Roll</td>
                                <td>Sr</td>
                                <td>Name</td>
                                <td>Roll</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="question.php">Question Paper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">LogOut</a>
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
                <li class="breadcrumb-item active">Question Paper</li>
            </ol>
            <div class="questiondisplay">
              <h2>Collapsible Sidebar Using Bootstrap 4</h2>

              <div class="line"></div>

              <h2>Lorem Ipsum Dolor</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <div class="line"></div>

              <h2>Lorem Ipsum Dolor</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
  <script src="bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');

        });
        /*----------------------------------------------ajax starts here----------------------------------------------*/
                    //using course to load value of level
                    $('#course').change(function(e){
                        e.preventDefault();
                        var cname = $(this).val();
                        
                        $.post(
                            "backend.php",
                            {course : cname},
                            function(data)
                            {
                                console.log(data);
                                $('#level').html('<option selected>Level</option><br>'+data);
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
                                // url : "test.php",
                                url : "backend.php",
                                data : {
                                    lname : lname
                                },
                                success : function(data){
                                    // var Data =$.parseJSON(data);
                                    var Data = JSON.parse(data);
                                    console.log(Data[1]);
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
                                    console.log(data);
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
                                    console.log(data);
                                    $('#subtopic').html('<option selected>Sub-Topic</option>'+data);
                                }
                                )
                        });

                    });
                </script>
            </body>

            </html>