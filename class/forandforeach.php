<?php
	
	$letters = range("A", "Z", 3);

	// print_r($letters);

	// For loop
	// for ($counter = 0; $counter < 10; $counter++) { 
	// 	echo $counter . "<br>";
	// }

	// // Foreach loop
	// foreach ($letters as $index => $letter) {
	// 	echo $index . " - " . $letter . "<br>";
	// }

	for ($counter = 1; $counter < 101; $counter++) { 
		// Continue
		if ($counter % 3 != 0) {
			Continue;
		}

		// Break
		if ($counter == 15) {
			Break;
		}

		echo $counter . "<br>";
	}
?>