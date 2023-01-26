<?php 


if (!isset($_COOKIE['username'])) {
	header("location:login.php");
}


$username = $_COOKIE['username'];
echo "Hello $username welcome!";

echo "<br />";
echo "setting here";