<?php

// creating a variable to store name 

$userName = "Oni Emmanuel";
echo $userName;

// creating a variable to store age
echo "<br>";
$userAge = "100";
echo $userAge;

// creating a variable to store country
echo "<br>";
$userCountry = "Nigeria";
echo $userCountry;

echo "<br><br><br>";

//Creating a sentence with the variables.

echo "My name is " .$userName. " I am " .$userAge. " years old. " .$userCountry. ". I love PHP.";
echo "<br>";
echo "<br>";
echo "<br>";

//Defining a constant
define("POPULATION",  "18,000,000");
echo POPULATION;
echo "<br>";
echo "<br>";

//Checking Datatypes


//Declaring variables of various data types
$val_1 = "Bolanle";
$val_2 = 287 ;
$val_3 = 28.7 ;
$val_4 = false;

echo is_string($val_1);
echo  " - " .$val_1. " is a string";
echo "<br>";


echo is_integer($val_2);
echo  " - " .$val_2. " is an integer";
echo "<br>";


echo is_float($val_3);
echo " - " .$val_3. " is a float";
echo "<br>";


echo is_bool($val_4);
echo " - "  .$val_4. " is a boolean";
echo "<br>";
echo "<br>";
echo "<br>";


// Operation

$x = 108;
$y = 54;

$sum = $x + $y;
echo "The sum of " .$x.  " and " .$y. " is " .$sum ; echo "<br><br>";

$arith = ($x * $x) * (0.5 * $y);
echo "The product of " .$x.  " squared and half of " .$y. " is " .$arith ; echo "<br><br>";

$modulus = $x % $y;
echo "The modulus of " .$x.  " and " .$y. " is " .$modulus ; echo "<br><br>";

echo "<h2>Thank you and have a lovely week tutor</h2>";
?>