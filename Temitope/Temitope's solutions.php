<?php

//setting variables: name, age and country
$name= "Temitope";
$age= 21;
$country= "Nigeria";

//printing the arguments of set variables
echo "$name <br/>", "$age <br/>", "$country <br/>";

//making sentences using set variables
echo "My name is $name. I am $age years old. I'm from $country. I love PHP <br/>";

//defining a constant
define("population", "18,0000", true);

//printing defined constant
echo PoPuLaTion, "<br/>" ;

//printing the data types of the given data
echo "Bolanle is a string data type <br/>", "287 is a number data type<br/>", "28.7 is a float data type<br/>","false is a boolean data type <br/>"; 

//given the values of variables x an y
$x= 108;
$y= 54;

//printing the sum of $x and $y
echo $x + $y, "<br/>";echo $x%$y; 

//printing the product of the square of $x and half of $y
echo ($x**2)*($y/2), "<br/>";

//printing the remainder when $x is divided by $y
echo $x%$y;

?> 