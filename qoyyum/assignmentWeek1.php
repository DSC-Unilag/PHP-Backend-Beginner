<?php
	// Variables

	$name = "Bayo";

	$age = 12;

	$country = "Nigeria";

	echo "My name is " . $name . "." . 
		 " I am " . $age . " years old. " . 
		 "I'm from " . $country . "." .
		 " I love PHP. <br><br><hr>";

	// Constants
	define("population", 18000000);

	echo population . "<br><br><hr>";

	// Data types
	$a = "Bolanle";
	$b = 287;
	$c = 28.7;
	$d = false;

	echo "The data type of " . $a . ' is "STRING"<br><br>';

	echo "The data type of " . $b . ' is "INTEGER"<br><br>';

	echo "The data type of " . $c . ' is "FLOAT"<br><br>';

	// variable $d won't be printed in this case because its value is "false".

	// Any variable whose value is equal to 'false' get ignored by the console.

	echo "The data type of false " . $d . ' is "BOOLEAN"<br><br><hr>';

	// Operators
	$x = 108;
	$y = 54;
	$half_of_y = $y / 2;
	$square_of_x = $x ** 2;
	$result = $square_of_x * $half_of_y;


	echo $x + $y . "<br><br>";

	echo $result . "<br><br>";

	echo $x % $y . "<br><br>";
?>