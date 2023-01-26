<?php
class Car
{
	public $name;
	public $price;
	public $colors;

	public function __construct($name, $price, $colors)
	{
		$this->name = $name;
		$this->price = $price;
		$this->colors = $colors;
	}

	public function changeColors($colors)
	{
		$this->colors = $colors;
	}
}

// $car1 = new Car("BMW", 1000000, ['red', 'white']);
// $car2 = new Car("Land Cruiser", 50000000, ['white']);
// $car3 = new Car("Seltos", 100000, ["Black"]);

// $cars = [
// 	$car1, $car2, $car3
// ];

$cars = [
	new Car("BMW", 1000000, ['red', 'white']),
	new Car("Land Cruiser", 50000000, ['white']),
	new Car("Seltos", 100000, ["Black"])
];

echo "<pre>";
var_dump($cars);
echo "</pre>";