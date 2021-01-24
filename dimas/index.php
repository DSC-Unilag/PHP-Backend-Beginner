<?php
  
  // TASK 1: create name, age, and country variable, store some values in them and use them for echo-ing
  
  //// storing vars
  $name = "Dimas";
  $age = 22;
  $country = "Indonesia";

  //// echo them
  echo "<p>My name is " . $name . ". I am " . $age ." years old. I'm from " . $country . ". I love PHP</p>";

  // TASK 2: define population = 18000000 and echo it
  $population = 18000000;

  echo "<p>";
  echo "Population: " . $population . "<br />";
  // or using number_format()
  echo "Population: " .
       number_format($population) .
       " (with some formatting, I mean, comma)";
  echo "</p>";

  // TASK 3: echo of data types
  echo "<p>";
  echo "\"Bolanle\": " . gettype("Bolanle") . "<br />";
  echo "287: " . gettype(287) . "<br />";
  echo "28.7: " . gettype(28.7) . "<br />";
  echo "false: " . gettype(false) . "<br />";
  echo "</p>";

  // TASK 4: given x = 100, y - 54
  $x = 108; $y = 54;

  echo "<p>";
  //// sum of $x and $y
  echo "$x + $y = " . ($x + $y) . "<br />";
  //// product of $x^2 and $y/2
  echo "$x^2 * $y/2 = " . (($x * $x) + ($y / 2)) . "<br />";   # manual method
  echo "$x^2 * $y/2 = " . (pow($x, 2) + ($y / 2)) . "<br />";  # using pow method
  //// remainder of $x / $y
  echo "remainder of $x / $y = " . ($x % $y) . "<br />";
  echo "</p>";

?>