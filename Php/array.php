<?php

//types of array in php

//1. Numeric Array
//function
$names = array('Rohit', 'Anil');

//literal
$names = ['Rohit', 'Anil'];

echo $names[0];
echo $names[1];


//2. Associative array

$student = array(
	"name" => "Anil Gurung", 
	"roll" => 1, "address" => 
	"Pokhara"
);


$student = [
				"name" => "Anil gurung", 
				"roll" => 1, 
				"address" => "Pokhara"
			];

//debugging purpose
var_dump($student);
print_r($student);


echo $student['name'];


// 3. Multi-dimensional array

// multidimensional associative array
$students = [
				["name" => "Anil", "roll" => 1],
				["name" => "Rohit", "roll" => 2]
			];

// Mutidimensional numeric array
$names = [
			[1, 2, 4],
			["anil", "rohit", "Arjun"]
		];