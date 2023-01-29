<?php 
session_start();

$_SESSION['username'] = "nishal";

//redirect
header("location:dashboard.php");

echo "login form here";
