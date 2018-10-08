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

// Add Course
if(isset($_POST["add-course"]))
{
	$name = secure($_POST["name"]);	
	$sql="INSERT INTO `course`(`c_name`) VALUES ('$name')";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('fields.php?added')</script>";
	}
}

    
// Add Level
if(isset($_POST["add-level"])&&isset($_GET["course"])&&is_numeric($_GET["course"]))
{
	$name = secure($_POST["name"]);	
	$course = secure($_GET["course"]);	
    
	$sql="INSERT INTO `level`(`L_name`, `L_CID`) VALUES ('$name',$course)";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('fields.php?manage-level&course=$course&added')</script>";
	}
}
    
// Add Reference
if(isset($_POST["add-reference"])&&isset($_GET["course"])&&is_numeric($_GET["course"]))
{
	$name = secure($_POST["name"]);	
	$course = secure($_GET["course"]);	
    
	$sql="INSERT INTO `reference`(`R_name`, `R_CID`) VALUES('$name',$course)";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('fields.php?manage-references&course=$course&added')</script>";
	}
}

// Add Attempt
if(isset($_POST["add-attempt"])&&isset($_GET["level"])&&is_numeric($_GET["level"]))
{
	$name = secure($_POST["name"]);	
	$level = secure($_GET["level"]);	
    
	$sql="INSERT INTO `attempt`(`A_name`, `A_LID`) VALUES ('$name',$level)";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('fields.php?manage-attempt&level=$level&added')</script>";
	}
}

// Add Subject
if(isset($_POST["add-subject"])&&isset($_GET["level"])&&is_numeric($_GET["level"]))
{
	$name = secure($_POST["name"]);	
	$level = secure($_GET["level"]);	
    
	$sql="INSERT INTO `subject`(`S_name`, `S_LID`) VALUES  ('$name',$level)";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('fields.php?manage-subject&level=$level&added')</script>";
	}
}

// Add Topic
if(isset($_POST["add-topic"])&&isset($_GET["subject"])&&is_numeric($_GET["subject"]))
{
	$name = secure($_POST["name"]);	
	$subject = secure($_GET["subject"]);	
    
	$sql="INSERT INTO `topic`(`T_name`, `T_SID`) VALUES  ('$name',$subject)";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('fields.php?manage-topic&subject=$subject&added')</script>";
	}
}
    
// Add Sub-Topic
if(isset($_POST["add-sub-topic"])&&isset($_GET["topic"])&&is_numeric($_GET["topic"]))
{
	$name = secure($_POST["name"]);	
	$topic = secure($_GET["topic"]);	
    
	$sql="INSERT INTO `subtopic`(`ST_name`, `ST_TID`) VALUES  ('$name',$topic)";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
		echo "<script>window.location.assign('fields.php?manage-sub-topic&topic=$topic&added')</script>";
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
                    <h3 class="text-primary">Add Fields</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Fields</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                
                <!-- Sub-Topic Content -->
                <?php if(isset($_GET['topic'])&&isset($_GET['manage-sub-topic'])&&is_numeric($_GET['topic'])) { 
                
                $cid = $_GET['topic'];
                $cname = "";
                $sql="SELECT T_name FROM `topic` WHERE TID = '$cid'";
                if ($result = $mysqli->query($sql))
                {
                    while ($row = $result->fetch_row())
                    {
                        $cname = $row[0];
                    }
                }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-body">
								<?php if(isset($_GET['added'])) { ?>
								<div class="alert alert-primary">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Congratulations!</strong> Sub-Topic Added Succesffully!
								</div>
								<?php } ?>
								<?php if(isset($_GET['removed'])) { ?>
								<div class="alert alert-warning">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Sub-Topic Deleted!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['edit'])) { ?>
								<div class="alert alert-success">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Done!</strong>Sub-Topic Updated Succesffully!
								</div>
								<?php } ?>
								
                               
                               <h4 class="card-title">Add New Sub-Topic in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">Fill the below form to add a new Sub-Topic to the system</h6>
								<div class="basic-form">
                                    <form method="post">
										<div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Sub-Topic Name</label>
                                                    <input type="text" name="name" class="form-control input-rounded" required>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" name="add-sub-topic" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Sub-Topic</button>
									</form>
                                </div>
							</div>
						</div>
						
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sub-Topics in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">List of Sub-Topics currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Sub-Topic Name</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `subtopic` WHERE `ST_TID`=$cid";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                            <tr>
												<td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td><a href='edit-field.php?sub-topic=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Sub-Topic"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-field.php?sub-topic=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Sub-Topic"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                            </tr>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <!-- Manage Sub-Topics -->
                
                
                <!-- Topic Content -->
                <?php if(isset($_GET['subject'])&&isset($_GET['manage-topic'])&&is_numeric($_GET['subject'])) { 
                
                $cid = $_GET['subject'];
                $cname = "";
                $sql="SELECT S_name FROM `subject` WHERE SID = '$cid'";
                if ($result = $mysqli->query($sql))
                {
                    while ($row = $result->fetch_row())
                    {
                        $cname = $row[0];
                    }
                }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-body">
								<?php if(isset($_GET['added'])) { ?>
								<div class="alert alert-primary">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Congratulations!</strong> Topic Added Succesffully!
								</div>
								<?php } ?>
								<?php if(isset($_GET['removed'])) { ?>
								<div class="alert alert-warning">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Topic Deleted!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['edit'])) { ?>
								<div class="alert alert-success">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Done!</strong>Topic Updated Succesffully!
								</div>
								<?php } ?>
								
                               
                               <h4 class="card-title">Add New Topic in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">Fill the below form to add a new Topic to the system</h6>
								<div class="basic-form">
                                    <form method="post">
										<div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Topic Name</label>
                                                    <input type="text" name="name" class="form-control input-rounded" required>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" name="add-topic" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Topic</button>
									</form>
                                </div>
							</div>
						</div>
						
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Topics in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">List of Topics currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Topic Name</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `topic` WHERE `T_SID`=$cid";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                            <tr>
												<td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td><a href='fields.php?manage-sub-topic&topic=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Manage Sub-Topic"><i style="color:#0000ff" class="fa fa-book fa-2x"></i></a>&nbsp;
                                                <a href='edit-field.php?topic=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Topic"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-field.php?topic=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Topic"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                            </tr>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <!-- Manage Topics -->
                
                
                
                <!-- Subject Content -->
                <?php if(isset($_GET['level'])&&isset($_GET['manage-subject'])&&is_numeric($_GET['level'])) { 
                
                $cid = $_GET['level'];
                $cname = "";
                $sql="SELECT L_name FROM `level` WHERE LID = '$cid'";
                if ($result = $mysqli->query($sql))
                {
                    while ($row = $result->fetch_row())
                    {
                        $cname = $row[0];
                    }
                }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-body">
								<?php if(isset($_GET['added'])) { ?>
								<div class="alert alert-primary">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Congratulations!</strong> Subject Added Succesffully!
								</div>
								<?php } ?>
								<?php if(isset($_GET['removed'])) { ?>
								<div class="alert alert-warning">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Subject Deleted!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['edit'])) { ?>
								<div class="alert alert-success">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Done!</strong>Subject Updated Succesffully!
								</div>
								<?php } ?>
								
                               
                               <h4 class="card-title">Add New Subject in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">Fill the below form to add a new Subject to the system</h6>
								<div class="basic-form">
                                    <form method="post">
										<div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Subject Name</label>
                                                    <input type="text" name="name" class="form-control input-rounded" required>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" name="add-subject" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Subject</button>
									</form>
                                </div>
							</div>
						</div>
						
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Subjects in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">List of Subjects currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Subject Name</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `subject` WHERE `S_LID`=$cid";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                            <tr>
												<td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td><a href='fields.php?manage-topic&subject=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Manage Topic"><i style="color:#0000ff" class="fa fa-book fa-2x"></i></a>&nbsp;
                                                <a href='edit-field.php?subject=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Subject"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-field.php?subject=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Subject"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                            </tr>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <!-- Manage Subjects -->
                
                <!-- Attempt Content -->
                <?php if(isset($_GET['level'])&&isset($_GET['manage-attempt'])&&is_numeric($_GET['level'])) { 
                
                $cid = $_GET['level'];
                $cname = "";
                $sql="SELECT L_name FROM `level` WHERE LID = '$cid'";
                if ($result = $mysqli->query($sql))
                {
                    while ($row = $result->fetch_row())
                    {
                        $cname = $row[0];
                    }
                }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-body">
								<?php if(isset($_GET['added'])) { ?>
								<div class="alert alert-primary">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Congratulations!</strong> Attempt Added Succesffully!
								</div>
								<?php } ?>
								<?php if(isset($_GET['removed'])) { ?>
								<div class="alert alert-warning">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Attempt Deleted!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['edit'])) { ?>
								<div class="alert alert-success">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Done!</strong>Attempt Updated Succesffully!
								</div>
								<?php } ?>
								
                               
                               <h4 class="card-title">Add New Attempt in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">Fill the below form to add a new Attempt to the system</h6>
								<div class="basic-form">
                                    <form method="post">
										<div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Attempt Name</label>
                                                    <input type="text" name="name" class="form-control input-rounded" required>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" name="add-attempt" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Attempt</button>
									</form>
                                </div>
							</div>
						</div>
						
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Attempts in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">List of Attempts currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Attempt Name</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `attempt` WHERE `A_LID`=$cid";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                            <tr>
												<td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td><a href='edit-field.php?attempt=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Attempt"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-field.php?attempt=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Attempt"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                            </tr>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <!-- Manage Attempts -->
                
                
                <!-- Level Content -->
                <?php if(isset($_GET['course'])&&isset($_GET['manage-level'])&&is_numeric($_GET['course'])) { 
                
                $cid = $_GET['course'];
                $cname = "";
                $sql="SELECT c_name FROM `course` WHERE CID = '$cid'";
                if ($result = $mysqli->query($sql))
                {
                    while ($row = $result->fetch_row())
                    {
                        $cname = $row[0];
                    }
                }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-body">
								<?php if(isset($_GET['added'])) { ?>
								<div class="alert alert-primary">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Congratulations!</strong> Level Added Succesffully!
								</div>
								<?php } ?>
								<?php if(isset($_GET['removed'])) { ?>
								<div class="alert alert-warning">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Level Deleted!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['edit'])) { ?>
								<div class="alert alert-success">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Done!</strong>Level Updated Succesffully!
								</div>
								<?php } ?>
								
                               
                               <h4 class="card-title">Add New Level in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">Fill the below form to add a new level to the system</h6>
								<div class="basic-form">
                                    <form method="post">
										<div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Level Name</label>
                                                    <input type="text" name="name" class="form-control input-rounded" required>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" name="add-level" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Level</button>
									</form>
                                </div>
							</div>
						</div>
						
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Levels in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">List of Levels currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Level Name</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `level` WHERE `L_CID`=$cid";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                            <tr>
												<td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td>
                                                <a href='fields.php?manage-attempt&level=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Manage Attempts"><i style="color:#0000ff" class="fa fa-wheelchair-alt fa-2x"></i></a>&nbsp;
                                                <a href='fields.php?manage-subject&level=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Manage Subjects"><i style="color:#ff00ff" class="fa fa-book fa-2x"></i></a>&nbsp;
                                                <a href='edit-field.php?level=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Level"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-field.php?level=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Level"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                            </tr>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <!-- Manage Levels -->
                
                
                <!-- References Content -->
                <?php if(isset($_GET['course'])&&isset($_GET['manage-references'])&&is_numeric($_GET['course'])) { 
                
                $cid = $_GET['course'];
                $cname = "";
                $sql="SELECT c_name FROM `course` WHERE CID = '$cid'";
                if ($result = $mysqli->query($sql))
                {
                    while ($row = $result->fetch_row())
                    {
                        $cname = $row[0];
                    }
                }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-body">
								<?php if(isset($_GET['added'])) { ?>
								<div class="alert alert-primary">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Congratulations!</strong> Reference Added Succesffully!
								</div>
								<?php } ?>
								<?php if(isset($_GET['removed'])) { ?>
								<div class="alert alert-warning">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Reference Deleted!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['edit'])) { ?>
								<div class="alert alert-success">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Done!</strong>Reference Updated Succesffully!
								</div>
								<?php } ?>
								
                               
                               <h4 class="card-title">Add New Reference in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">Fill the below form to add a new Reference to the system</h6>
								<div class="basic-form">
                                    <form method="post">
										<div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Reference Name</label>
                                                    <input type="text" name="name" class="form-control input-rounded" required>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" name="add-reference" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Reference</button>
									</form>
                                </div>
							</div>
						</div>
						
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">References in <?php echo $cname ?></h4>
                                <h6 class="card-subtitle">List of References currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Reference Name</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `reference` WHERE `R_CID`=$cid";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                            <tr>
												<td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td><a href='edit-field.php?reference=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Reference"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-field.php?reference=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Reference"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                            </tr>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Manage References -->
                
                
                <?php if(!isset($_GET['manage-level'])&&!isset($_GET['manage-references'])&&!isset($_GET['manage-attempt'])&&!isset($_GET['manage-subject'])&&!isset($_GET['manage-topic'])&&!isset($_GET['manage-sub-topic'])) { ?>
                <!-- Course Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-body">
								<?php if(isset($_GET['added'])) { ?>
								<div class="alert alert-primary">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Congratulations!</strong> Course Added Succesffully!
								</div>
								<?php } ?>
								<?php if(isset($_GET['removed'])) { ?>
								<div class="alert alert-warning">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Course Deleted!</strong>
								</div>
								<?php } ?>
								<?php if(isset($_GET['edit'])) { ?>
								<div class="alert alert-success">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Done!</strong>Course Updated Succesffully!
								</div>
								<?php } ?>
								
                               
                               <h4 class="card-title">Add New Course</h4>
                                <h6 class="card-subtitle">Fill the below form to add a new course to the system</h6>
								<div class="basic-form">
                                    <form method="post">
										<div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Course Name</label>
                                                    <input type="text" name="name" class="form-control input-rounded" required>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" name="add-course" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Course</button>
									</form>
                                </div>
							</div>
						</div>
						
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Courses</h4>
                                <h6 class="card-subtitle">List of Courses currently on the system</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Course Name</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$sql="SELECT * FROM `course`";
											$i=0;
											if ($result = $mysqli->query($sql))
											{
											while ($row = $result->fetch_row())
											{ $i++;?>
                                            <tr>
												<td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td>
                                                <a href='fields.php?manage-level&course=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Manage Levels"><i style="color:#ff00ff" class="fa fa-line-chart fa-2x"></i></a>&nbsp;
                                                <a href='fields.php?manage-references&course=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Manage References"><i style="color:#0000ff" class="fa fa-book fa-2x"></i></a>&nbsp;
                                                <a href='edit-field.php?course=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Edit Course"><i style="color:#00ff00" class="fa fa-edit fa-2x"></i></a> &nbsp;<a href='delete-field.php?course=<?php echo $row[0]; ?>' data-toggle="tooltip" title="Delete Course"><i style="color:#ff0000" class="fa fa-trash fa-2x"></i></a></td>
                                            </tr>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Manage Course -->
                <?php } ?>
                
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> &copy; 2018 Question Bank. All rights reserved. | Designed by <a href="https://colorlib.com">Colorlib</a> |  Redesigned &amp; Developed by <a href="http://www.hertzsoft.com/" target="_blank">Hertzsoft</a></footer>
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
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
	</script>
</body>

</html>