<?php 

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
//delete cookies
setcookie("username", "", time() - 3600, '/');

