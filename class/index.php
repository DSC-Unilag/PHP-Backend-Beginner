<?php

	// To output data
	echo "Hello World! <br>";

	// Comments
	// Single-line comments
	# Single-line comments
	/*
		Name: Application
		Function: To process all payments in the app
	*/	

	// Variables
	$name = "Zubair";

	$Zubair = "Test <br><br>";

	// $name = "Kunle";

	// Variable variables
	$anotherName = $$name;

	// Outputting variables
	echo $anotherName;

	// Constant
	define('RATE', 0.2);

	// No redefining constants
	// RATE = 0.4;

	/*
		DATA TYPES
	*/
	// Strings
	$note = "I love you";
	$note2 = 'I love you too';
	$note3 = '3';

	// String concatenation
	echo "Bola said: " . $note . ". Then Tayo replied: " . 
		$note2 . " " . $note3 . "<br><br>";

	// Check is string
	echo is_string($note);

	// Integers
	$number = 1;

	// Check integer
	echo is_integer($number);

	// Float, decimal numbers
	$float = 0.4;

	// Check if float
	echo is_float($float);

	// Boolean, true or false
	$bool = true;

	// Check bool
	echo is_bool($bool);

	/*
		Operators
	*/
	echo "<br><hr><br><h1>Operators</h1>";
	// Arithmetic (+, -, *, /, %)
	// Addition
	$number1 = 10;
	$number2 = 15;

	$sum = $number1 + $number2;
	$substraction = $number1 - $number2;
	$multiplication = $number1 * $number2;
	$division = $number1 / $number2;
	$modulus = $number2 % $number1;

	// Check if 1 and 2 are equal
	$equality = $number1 == $number2;

	// Check for inequality
	$inequality = $number1 != $number2;

	// Check if greater than
	$greaterThan = $number1 > $number2;

	// Check if less than
	$lessThan = $number1 < $number2;

	// Check if greater than or equal to
	$greaterThanOrEqualTo = $number1 >= $number2;

	// Check if less than or equal to
	$lessThanOrEqualTo = $number1 <= $number2;
?>