<?php 

session_start();


if (!isset($_SESSION['username'])) {
	header("location:login.php");
}


$username = $_SESSION['username'];
echo "Hello $username welcome!";

echo "<br />";
echo "setting here";