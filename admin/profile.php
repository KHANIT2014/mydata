<?php
include_once("config.php");
 
if(isLoggedIn())
{
	$aid = $_SESSION['aid'];

	$sql = "SELECT * FROM `admin` WHERE `email`='$aid'";
	$result = $mysqli->query($sql);

	if($row = $result->fetch_assoc())
	{
		$name = $row['name'];
	}
}
else
{
	header("location:login.php");
}

?>