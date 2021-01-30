<?php

echo "<h3>Numbers ranging from 125 to 800</h3>";

$numbers=range(125,800,5);
print_r($numbers);
echo "<br><br>";
echo "The 17th item is ".$numbers[17]." and the 23rd item is ".$numbers[23]. " and the 48th item is ".$numbers[48];

echo "<br><br>";

echo "The number of elements in the array is ". count($numbers);

echo "<br><br>";

echo "The sum of elements in the array is ". array_sum($numbers);

echo "<br><br>";

shuffle($numbers);
echo "The 17th item is ".$numbers[17]." and the 23rd item is ".$numbers[23]. " and the 48th item is ".$numbers[48];

echo "<br><br>";

echo"<h3>Favorite Footballers</h3>";

$players=array('Ronaldo'=> 7, 'Messi'=> 10, 'Lewandowski'=> 9, 'Bale'=> 11, 'Ramos'=> 4);

ksort($players);
print_r($players);


?>