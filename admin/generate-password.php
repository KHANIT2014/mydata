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

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
    
if(isset($_POST["submit"])&&isset($_GET["id"])&&is_numeric($_GET["id"]))
{
	$id = secure($_GET["id"]);
    $password = generateRandomString();
    $cipher = md5(md5("wallet") .$password . md5("pen"));
	$sql="UPDATE `users` SET `password`='$cipher' WHERE `UID`=$id";
	$res =$mysqli->query($sql);
	if(!$res)
	{
		echo "'Error: (" . $mysqli->errno . ") " . $mysqli->error . "";
	}
	else
	{
        $sql="SELECT `name`, `lname`, `email` FROM `users` WHERE `UID` = $id";
        if ($result = $mysqli->query($sql))
        {
            while ($row = $result->fetch_row())
            {
                $msg = "Dear " . $row[0] . " " . $row[1] . ",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Password has been re-generated by Admin of Question Bank. Please login using the below credentials.<br><br><b>Username:</b> " . $row[2] . "<br><b>Password:</b> $password";
                mail($row[2],"Password Re-generated for Question Bank",$msg);
            }
        }
        echo "<script>window.location.assign('users.php?generated')</script>";
	}
}
?>
</head>
<body>

<div class="container text-center">
  <h1>Are you sure you want to generate password for this user?<br><small>A random password will be generated and sent to the user. User will be able to login &amp; view all pricing information. </small></h1>
  <form method="post"><button type="submit" name="submit" class="btn btn-danger btn-lg"><i class= "fa fa-trash"></i> Confirm</button> &nbsp;<button type="button" onclick="javascript:window.location.href='users.php'" class="btn btn-primary btn-lg">Not Now</button></form>
</div>

</body>
</html>