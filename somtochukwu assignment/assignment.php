<?php

    // Question 1 
    $name = "Somtochukwu";
    $age = 17;
    $country = "Nigeria";

    echo $name, $age, $country;

    // Question 2
    echo "My name is " . $name ." I am "
    . $age . "years old. I'm from ". $country;

    // Question 3
    define("population", "18,000,000");
    echo population;


    // Question 4
    echo gettype("bolanle");
    echo gettype(287);
    echo gettype(28.7);
    echo gettype(false);


    // Question 5
    $x = 108;
    $y = 54;
    $squareX = $x ** 2;
    $halfY = $y / 2;
    echo $x + $y;
    echo $squareX * $halfY;
    echo $x % $y;

?>
