<?php

	// Code here
	// $array = ["Name", "Age"];

	// $students_score = [
	// 	"Myself" => 98,
	// ];

	// echo $students_score["Myself"];

	$students = [
		"Myself" => [
			"Subjects" => [
				"English" => 23,
				"Maths" => 89,
			],
			"Age" => 20,
			"Sex" => "Male",
		],
		"Dimas" => [],
	];

	print_r($students);

	echo "<br><br>";

	$people = ["Me", "You", "Us", "Them", "We", "Y'all", "Dimas", "Yusuf"];

	shuffle($people);
	print_r(array_chunk($people, 3));

?>