<?php


    //Create an array of multiples of 5 from 125 to 800
    $numbers = range(125,800,5);

    //Print the array from question 1
    print_r($numbers);
    echo "<br><br>";

    //Print the 17th, 23rd and 48th item of the array from question 1 in the format: "The 17th item is $17th and the 23rd item is $23rd and the 48th item is $48th".

     echo "The 17th item is $numbers[17]";
     echo "<br><br>";
     echo "The 23rd item is $numbers[23]";
     echo "<br><br>";
     echo "The 48th item is $numbers[48]";
     echo "<br><br>";

    //Echo the number of elements in the array from question 1
    echo count($numbers);
    echo "<br><br>";

    //Echo the sum of the elements in the array from question 1
    echo array_sum($numbers);
    echo "<br><br>";

    //Randomize the array, using shuffle and print the 17th, 23rd and 48th items again in the format used in question 3
    shuffle($numbers);
    echo "The 17th item is $numbers[17]";
     echo "<br><br>";
     echo "The 23rd item is $numbers[23]";
     echo "<br><br>";
     echo "The 48th item is $numbers[48]";
     echo "<br><br>";

     //Create an associative array that stores your top 5 favorite football players and their jersey number.
     $players = [
        "Zinedine Zidane" => 5,
        "xavi" => 6,
        "lampard" => 8,
        "zlatan" => 9,
        "ronaldo" => 7,
        "messi" => 10
     ];

     //Sort the array created in question 7 by the keys of the array.

     print_r(array_keys($players));


?>