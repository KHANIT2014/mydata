<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once("profile.php"); ?>
  <title>Question Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php    
if(isset($_POST["submit"])&&isset($_GET["id"])&&is_numeric($_GET["id"]))
{
	$id = secure($_GET["id"]);
    $sql="UPDATE `users` SET `password`='nil' WHERE `UID`=$id";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
        echo "<script>window.location.assign('users.php?blocked')</script>";
	}
}
?>
</head>
<body>

<div class="container text-center">
  <h1>Are you sure you want to lock this user?<br><small>User Password will be deleted and he/she won't be able to login further. You can later generate Password for the user if you change your mind.</small></h1>
  <form method="post"><button type="submit" name="submit" class="btn btn-danger btn-lg"><i class= "fa fa-trash"></i> Confirm</button> &nbsp;<button type="button" onclick="javascript:window.location.href='users.php'" class="btn btn-primary btn-lg">Not Now</button></form>
</div>

</body>
</html>