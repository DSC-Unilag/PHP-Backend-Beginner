<?php
	$space = "<br><br><br>";
	
	//1. creating an array of multiples of 5	
	$multipleOfFive = range(125, 800, 5);
	
	//2. printing of multiples of 5
	print_r($multipleOfFive);
	echo $space;
	
	//3. printing numbers from their index values.
	echo "The 17th item is " .$multipleOfFive[16]. ", and the 23rd item is " .$multipleOfFive[22]. ", and the 48th item is " .$multipleOfFive[47];
	echo $space;
	
	// 4. Echo the number of elements in the array.
	echo count($multipleOfFive);
	echo $space;
	
	//5. Sum of elements in the array
	echo array_sum($multipleOfFive);
	echo $space;
	
	//6. Shuffling and printing of the array
	shuffle($multipleOfFive);
	echo "The 17th item is " .$multipleOfFive[16]. ", and the 23rd item is " .$multipleOfFive[22]. ", and the 48th item is " .$multipleOfFive[47];
	echo $space;
?>