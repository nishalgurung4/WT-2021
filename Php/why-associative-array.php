<?php


$rolls = [1, 5, 18, 4];
$names = ["Anil", "rohit", "Arjun", "Dipesh"];

for($i = 0; $i < count($names); $i++) {
	echo "Roll =" . $rolls[$i] . " & name = ". $names[$i];
	echo "<br />";
}


$students = [

				["name" => "Anil", "roll" => 1],
				["name" => "Rohit", "roll" => 5],
				["name" => "Arjun", "roll" => 18],
				["name" => "Dipesh", "roll" => 4]
			];

// loop for array
echo "<br /> Foreach loop ====== <br />";
foreach ($students as $student) {
	echo "Roll =" . $student['roll'] . " & name = " . $student['name'];
	echo "<br />";
}


echo $students[0]['name'];
echo $students[3]['name'];
echo $students[3]['roll'];