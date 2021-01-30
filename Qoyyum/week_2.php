<?php 

$spaces = "<br><br>";

$multiples_of_5 = range(125, 800, 5);

print_r($multiples_of_5);

echo $spaces;

echo "The 17th item is ".$multiples_of_5[16]. ", the 23rd item is ".$multiples_of_5[22]. " and the 48th item is ".$multiples_of_5[47];

echo $spaces.count($multiples_of_5);

$sum = array_sum($multiples_of_5);

echo $spaces.$sum;

shuffle($multiples_of_5);

echo $spaces;

echo "The 17th item is ".$multiples_of_5[16]. ", the 23rd item is ".$multiples_of_5[22].
	 " and the 48th item is ".$multiples_of_5[47];


$players = ["Xu" => 7, "Xiang" => 11, "Yung" => 23, "Kong" => 6, "Li" => 10];

ksort($players);

echo $spaces;

print_r($players);
?>