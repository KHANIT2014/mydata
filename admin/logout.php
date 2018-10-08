<?php

include_once("config.php");

session_start();
session_destroy();

setcookie("aid" , "" , time()-60*5);
header("Location:login.php?logout");

exit();
?>
