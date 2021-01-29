<?php
// Question 1
$name = 'Caleb';
$age = 20;
$country= "Nigeria";


echo "$name <br/>", "$age <br/>", "$country<br/>";

//Question 2
echo "<br/>";
echo "My name is ". $name." I am "
.$age . "years old. I'm from ". "$country. I love php<br/>";

//Question 3
define("population", "18,000,000");
echo population, "<br/>";

//Question 4
echo gettype("bolanle"), "<br/>";
echo gettype(287), "<br/>";
echo gettype(28.7), "<br/>";
echo gettype(false), "<br/>";

//Question 5
$x = 108;
$y =54;
$squareX =$x ** 2;
$halfY = $y / 2;
echo $x +$y,  "<br/>";
echo $squareX  * $halfY,  "<br/>";
echo $x % $y,  "<br/>";
?>