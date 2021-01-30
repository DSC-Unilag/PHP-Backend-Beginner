<?php

	$spaces = "<br><br><br>";
	
	// Data types
	$string = "Boy is a verb";
	$int = 8;

	// Creating Arrays
	$students = ["Myself", "Yusuf", "Dimas", "Somto", "Bayo", "Caleb"];

	$students[] = "Agba";
	// $students[] = "Temi";

	// $students[2] = "Boy";

	// $students = array("Boy 1", "Boy 2");

	print_r($students);

	// echo $students;

	// Instead of
	// $numbers = [0, 1, 2, 3, 4, 5];

	// Do this
	$numbers = range(0, 100, 2);

	// Using range
	$letters = range("a", "j", 2);

	echo $spaces;

	print_r($letters);

	echo $spaces;

	// Echo array item
	echo $students[2];

	// Check if array
	echo is_array($students);

	echo $spaces;

	// Number of students
	echo count($students);

	echo $spaces;

	// Sum array elements
	echo array_sum($numbers);

	// Sort arrays
	rsort($students);

	print_r($students);

	// Shuffle
	shuffle($students);

	echo $spaces;

	print_r($students);

	// Return random element
	echo $students[array_rand($students)];

	// Check if in array
	echo in_array("Agba", $students);

	array_unshift($students, "Agba");
	$students[] = "Agba";
	$students[] = "Myself";

	echo $spaces;

	print_r($arrays);

	// Return count of each value
	// print_r(array_count_values($students));

	echo $spaces;

	// Print unique value
	print_r(array_unique($students));

	// Array differences
	$fruits_a = ["Apple", "Mango", "Banana"];
	$fruits_b = ["Sugar", "Mango"];

	echo $spaces;

	print_r(array_reverse(array_diff($fruits_a, $fruits_b)));
?>