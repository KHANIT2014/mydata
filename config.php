<?php
$sql = new mysqli("localhost","root","","questionpaper");
// if not connected to db, show error
if ($sql->connect_errno) 
	echo "Failed to connect to MySQL: (" . $sql->connect_errno . ") " . $sql->connect_error;
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
function secure($strToSecure){
	global $sql;
	$strToSecure = mysqli_real_escape_string($sql, $strToSecure);
	$strToSecure = strip_tags($strToSecure);
	$strToSecure = htmlentities($strToSecure);
	return $strToSecure;
}
?>