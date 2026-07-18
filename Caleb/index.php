<?php

//array of multiples of 5 between 125, 800
$array1= range(125,800,5);
//printing out elements of the array
print_r($array1);
echo "<br>";echo "<br>";echo "<br>";
//printing the 17th term of the array
echo "the 17th term is ";
 print_r($array1[17]);
echo "<br>";echo "<br>";echo "<br>";
echo "the 23rd term is ";
print_r($array1[23]);
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "the 48th term is ";
 print_r($array1[48]);
echo "<br>";echo "<br>";echo "<br>";

echo "<br>";
$a = $array1[0];
echo $a;
echo "<br>";

echo count($array1).'<br><br>';

$sum = array_sum($array1);
echo $sum;
echo "<br>";echo "<br>";echo "<br>";

shuffle($array1);
echo "the 17th term is ";
 print_r($array1[17]);

echo "<br>";echo "<br>";echo "<br>";
echo "the 23rd term is ";
print_r($array1[23]);

echo "<br>";echo "<br>";echo "<br>";echo "<br>";

echo "the 48th term is ";
 print_r($array1[48]);

echo "<br>";echo "<br>";echo "<br>";

$players =array("Ronaldo"=>"7", "ziyech"=>"22", "dybala"=>"10","son" => "7", "pulisic" =>"10");
//sort($players);
print_r(array_keys($players));


?>