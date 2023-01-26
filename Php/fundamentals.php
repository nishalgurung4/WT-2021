<?php

//display

echo "This is string";

//variable

$name = "Nishal";


echo 'This is $name';
echo "This is $name";

echo "<h1>Heading</h1>";

//constant

define('PI', 3.14);

echo PI;

echo "<br />";

//condition
if (PI > 5) {
	echo "Greater";
} else {
	echo "Lower";
}

//Loop
for($i=0; $i < 10; $i++) {
	echo $i;
}

$j = 0;
while($j < 5) {
	echo $j;
	$j++;
}

$k = 0;
do {
	echo $k;
	$k++;
} while($k < 2);

$nameAgain = "$name Gurung";

echo $nameAgain;


$i = "5";
$j = "i";
echo $$j;
?>
<h1>Heading </h1>


<?php 


?>