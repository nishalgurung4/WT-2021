<?php 
session_start();
//superglobal variable
//$_POST, $_GET, $_REQUEST, $_SERVER

if (!isset($_SESSION['username'])) {
	header("location:home.php");
}


$username = $_SESSION['username'];
echo "Hello $username welcome!";

echo "<br />";
echo "dashboard here";