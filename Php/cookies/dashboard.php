<?php 

//superglobal variable
//$_POST, $_GET, $_REQUEST, $_SERVER

if (!isset($_COOKIE['username'])) {
	header("location:login.php");
}


$username = $_COOKIE['username'];
echo "Hello $username welcome!";

echo "<br />";
echo "dashboard here";