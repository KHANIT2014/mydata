<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("profile.php"); ?>
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
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <?php

if(isset($_POST["submit"]))
{
	$name = secure($_POST["name"]);
	$price = secure($_POST["price"]);
	$excise = secure($_POST["excise"]);
	$tax = secure($_POST["tax"]);
	$location = secure($_POST["location"]);
	
	$sql="INSERT INTO `items`(`iname`, `price`, `excise`, `tax`, `location`, `date`) VALUES ('$name',$price,'$excise','$tax','$location',CURDATE())";
	$res =$mysqli->query($sql);
    
    
    $sql="SELECT `sr` FROM `items` ORDER BY sr DESC LIMIT 1";
    $result = $mysqli->query($sql);
    if($row = $result->fetch_row())
    {
        $autoid = $row[0];
    }
    
    $sql="INSERT INTO `iprices`(`iid`, `iprice`, `date`) VALUES ('$autoid','$price',CURDATE());";
	$res =$mysqli->query($sql);
    
    $sql="INSERT INTO `drumprices`(`iid`, `iprice`, `date`) VALUES ('$autoid','$price',CURDATE());";
	$res =$mysqli->query($sql);
    
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('items.php?added')</script>";
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
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li style="text-align:center"><a href="#"><i class="fa fa-user"></i> &nbsp;<?php echo $name; ?></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="changepass.php"><i class="fa fa-cog"></i> Change Password</a></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <?php require('nav.php'); ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add New Questions</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Questions</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="items.php">
                            <div class="card">
                                <div class="card-body">
                                    <?php if(isset($_GET['added'])) { ?>
                                    <div class="alert alert-primary">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Congratulations!</strong> Question Added Succesffully!
                                    </div>
                                    <?php } ?>
                                    <?php if(isset($_GET['removed'])) { ?>
                                    <div class="alert alert-warning">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Question Deleted!</strong>
                                    </div>
                                    <?php } ?>
                                    <?php if(isset($_GET['edit'])) { ?>
                                    <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Done!</strong> Question Updated Succesffully!
                                    </div>
                                    <?php } ?>
                                    <h4 class="card-title">Select Parameters</h4>
                                    <h6 class="card-subtitle">Fill the below form to add a new item to the system</h6>
                                    <div class="basic-form">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Course</label>
                                                    <select class="form-control" id="course" name="course">
                                                        <option value="">Course</option>
                                                        <?php
                                                        $sql="SELECT * FROM `course`";
                                                        if ($result = $mysqli->query($sql))
                                                        {
                                                        while ($row = $result->fetch_row())
                                                        { ?>
                                                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option> 
                                                            <?php 
                                                        } }
                                                        ?> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <select class="form-control" id="level" name="level">
                                                        <option value="">Level</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Attempt</label>
                                                    <select class="form-control" id="attempt" name="attempt">
                                                        <option value="">Attempt</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <select class="form-control" id="subject" name="subject">
                                                        <option value="">Subject</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Topic</label>
                                                    <select class="form-control" id="topic" name="topic">
                                                        <option value="">Topic</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Sub-Topic</label>
                                                    <select class="form-control" id="subtopic" name="subtopic">
                                                        <option value="">Sub-Topic</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>References</label>
                                                    <select class="form-control" id="reference" name="reference">
                                                        <option value="">References</option>

                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Item</button>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Insert Question Data</h4>
                                    <h6 class="card-subtitle">Fill the below form to add a new item to the system</h6>
                                    <div class="basic-form">
                                        <div class="row">
                                           <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Timer (minutes)</label>
                                                    <input type="number" class="form-control input-rounded" name="time">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Expected Marks</label>
                                                    <input type="number" class="form-control input-rounded" name="marks">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><B>Question</B></label>
                                                    <textarea name="question" id="question"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><B>Options</B></label>
                                                    <textarea name="options" id="options">
                                                        A. <br>
                                                        B. <br>
                                                        C. <br>
                                                        D.
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><B>Examiner Review</B></label>
                                                    <textarea name="review" id="review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><B>Comments</B></label>
                                                    <textarea name="comments" id="comments"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Items</h4>
                                <h6 class="card-subtitle">List of Items currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Tax</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `items`";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row[1]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row[2]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row[4]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row[5]; ?>
                                                    </td>
                                                    <?php
                                                $sql="SELECT `iprice` FROM `iprices` WHERE `iid` = ".$row[0]." ORDER BY `sr` DESC LIMIT 2";
                                                $last_price = $row[2];
                                                if ($presult = $mysqli->query($sql))
                                                {
                                                    while ($prow = $presult->fetch_row())
                                                    {
                                                        $last_price = $prow[0];
                                                    }
                                                }
                                                if($row[2]==$last_price)
                                                {
                                                    echo "<td><a href='#' data-toggle='tooltip' title='No Change'><i style='color:#0000ff' class='fa fa fa-ban fa-2x'></i></a></td>";
                                                }
                                                elseif($row[2]>$last_price)
                                                {
                                                    echo "<td><a href='#' data-toggle='tooltip' title='Increased'><i style='color:#00ff00' class='fa fa-arrow-circle-up fa-2x'></i></a></td>";
                                                }
                                                elseif($row[2]<$last_price)
                                                {
                                                    echo "<td><a href='#' data-toggle='tooltip' title='Decreased'><i style='color:#ff0000' class='fa fa-arrow-circle-down fa-2x'></i></a></td>";
                                                }
                                                ?>
                                                        <td><a href='edit-item.php?id=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Item"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-item.php?id=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Item"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                                </tr>
                                                <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> &copy; 2018 Question Bank. All rights reserved. | Designed by <a href="https://colorlib.com">Colorlib</a> | Redesigned & Developed by <a href="http://www.hertzsoft.com/" target="_blank">Hertzsoft</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
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
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('question');
        CKEDITOR.replace('review');
        CKEDITOR.replace('comments');
        CKEDITOR.replace('options');
    </script>

    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.php5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
    <script type="text/javascript">
        function view(QID) {
            $.ajax({
                type: "POST",
                datatype: "json",
                url: "backend.php",
                data: {
                    qid: QID
                },
                success: function(data) {
                    console.log(data);
                    $('.questiondisplay').html(data);
                }
            });
        }

        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
            /*-----------------------------------------ajax starts here-------------------------------------*/
            //using course to load value of level
            $('#course').change(function(e) {
                e.preventDefault();
                var cname = $(this).val();
                $.post(
                    "backend.php", {
                        course: cname
                    },
                    function(data) {
                        var Data = JSON.parse(data);
                        $('#level').html('<option selected>Level</option><br>' + Data[0]);
                        $('#reference').html('<option selected>Reference</option><br>' + Data[1]);
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
            $('#level').change(function(e) {
                e.preventDefault();
                var lname = $(this).val();
                $.ajax({
                    type: "POST",
                    datatype: "json",
                    // url : "test.php",
                    url: "backend.php",
                    data: {
                        lname: lname
                    },
                    success: function(data) {
                        // var Data =$.parseJSON(data);
                        var Data = JSON.parse(data);
                        // console.log(Data[1]);
                        $('#attempt').html('<option selected>Attempt</option><br>' + Data[0]);
                        $('#subject').html('<option selected>Subject</option><br>' + Data[1]);
                    }
                });
            });

            //loading value of topic using subject
            $('#subject').change(function() {
                var sname = $(this).val();
                $.post(
                    "backend.php", {
                        sname: sname
                    },
                    function(data) {
                        // console.log(data);
                        $('#topic').html('<option selected>Topic</option><br>' + data);
                    }
                );
            });

            // loading value of sub-topic using subject
            $('#topic').change(function() {
                var tname = $(this).val();

                $.post(
                    "backend.php", {
                        tname: tname
                    },
                    function(data) {
                        // console.log(data);
                        $('#subtopic').html('<option selected>Sub-Topic</option>' + data);
                    }
                );
            });

            //loading multiple values for question
            $('#subtopic').change(function() {
                var stname = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "backend.php",
                    datatype: "json",
                    data: {
                        stname: stname
                    },
                    success: function(data) {
                        // console.log("values are : "+data);
                        $('.csqtqstq').html(data);
                    }
                });
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
