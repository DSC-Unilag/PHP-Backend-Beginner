<?php

    $name = 'Ajayi Emmanuel';
    $age = '18';
    $country = 'Nigeria';

    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $country;

    echo '<br><br>';
    echo "My name is ".$name.". I am ".$age."years old. I am from ".$country.".I love PHP";

    echo "<br><br>";
    define('POPULATION', 18000000);
    echo POPULATION;

    echo '<br><br>';
    $test = "bolanle";
    echo is_string($test);
    echo "<br>";
    echo is_integer(287);
    echo "<br>";
    echo is_float(28.7);
    echo "<br>";
    echo is_bool(false);

    echo "<br>";
    
    $x = 108;
    $y = 54;
    echo $x + $y;
    echo "<br>";
    $square_of_x = $x * $x;
    $half_of_y = $y / 2;
    echo $square_of_x * $half_of_y;
    echo "<br>";
    echo $x % $y;
    
    

?>