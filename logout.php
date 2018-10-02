<?php 
require("config.php");
session_start();
session_destroy();
setcookie("" , "" , time()-60*5);
header("location:index.php");
 ?>