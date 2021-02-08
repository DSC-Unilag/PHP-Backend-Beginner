<?php
	
	$letters = range("A", "Z", 3);

	// print_r($letters);

	// For loop
	// for ($counter = 0; $counter < 10; $counter++) { 
	// 	echo $counter;
	// }

	// Foreach loop
	foreach ($letters as $index => $letter) {
		echo $index . " - " . $letter . "<br>";
	}
?>