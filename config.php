<?php
$mysqli = new mysqli("localhost","root","","questionpaper");
// if not connected to db, show error
if ($mysqli->connect_errno) 
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
session_start();
//setting cookie
function isLoggedIn()
{
	if(isset($_SESSION['uid']) || isset($_COOKIE['uid']))
		{	if(isset($_COOKIE['uid']))
	$_SESSION['uid']=$_COOKIE['uid'];
	return true;
}
else
	return false;
}
// welcome message
if(isLoggedIn())
{
	$uid = $_SESSION['uid'];
	$string = "SELECT * FROM `users` WHERE `email`='$uid'";
	$temp = $mysqli->query($string);
	if($demo = $temp->fetch_assoc())
	{
		$full_name = $demo['fname'] . " " . $demo['lname'];
	}
}

function secure($strToSecure){
	global $mysqli;
	$strToSecure = mysqli_real_escape_string($mysqli, $strToSecure);
	$strToSecure = strip_tags($strToSecure);
	$strToSecure = htmlentities($strToSecure);
	return $strToSecure;
}
?>