<?php

class Task
{
	public $name;
	//__construct() -> one of the magic function
	// constructor
	// invoked/called automatically during object creation
	public function __construct()
	{
		echo "inside constructor";
	}
	public function display()
	{
		echo "displaying";
		echo $this->name;
	}

}

class Todo
{

}
//creating object
$task = new Task();
$task->name = "Go to the Market";
$task->display();