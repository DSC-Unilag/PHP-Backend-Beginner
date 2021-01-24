<?php
$name = "MasterCraft";
$age = 20;
$country = "Nigeria";
$sentence = "My name is $name. I am " . ($age > 1) ? "$age years" : "$age year" . " old. I'm from $country. I love PHP";

define ("population", 18,000,000);
echo population;

echo gettype("Bolanle");
echo gettype(287);
echo gettype(28.7);
echo gettype(false);

$x = 108;
$y = 54;
echo $x + $y;
echo ($x ** 1/2) * ($y ** 1/2);
echo $x % $y;
?>
