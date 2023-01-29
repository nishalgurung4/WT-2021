<?php 


if (!function_exists('dd')) {
	function dd($data) 
	{
		dump($data);
		die();
	}
}

if (!function_exists('dump')) {
	function dump($data)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}
}