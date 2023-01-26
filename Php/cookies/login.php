<?php 

//create
setcookie("username", "nishal", time() + (86400 * 30), "/");

//redirect
header("location:dashboard.php");

echo "login form here";
