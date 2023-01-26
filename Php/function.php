<?php

function sum()
{
	$a = 1;
	$b = 2;
	echo $a + $b;
}

function diff($a, $b) // (int $a, int $b)
{
	echo $a - $b;
}

function mult() //:int
{
	return $a * $b;
}

function divide($a, $b)
{
	try {
		$divide = $a / $b; //DivideByZero
		//return;
	} catch(DivideByZero $e) {
		echo $e->getMessage();
	} catch(\Exception $e) {
		echo $e->getMessage();
	} finally {
		echo "division completed";
	}
	
	return $a/$b;
}

//function call

sum();
diff(5, 2);
mult();
divide(8, 0);