<?php

    //Question 1
    $multiples_of_5 = range(125,800,5);

    //Question 2
    print_r($multiples_of_5);

    //Question 3
    echo "<br><br>The 17th item is ",$multiples_of_5[17]," and the 23rd item is ",$multiples_of_5[23]," and the 48th item is ",$multiples_of_5[48],".<br><br>";

    //Question 4
    echo count($multiples_of_5);

    //Question 5
    echo "<br><br>";
    echo array_sum($multiples_of_5);

    //Question 6
    shuffle($multiples_of_5);
    echo "<br><br>The 17th item is ",$multiples_of_5[17]," and the 23rd item is ",$multiples_of_5[23]," and the 48th item is ",$multiples_of_5[48],".<br><br>";

    //Question 7
    $players = array(
        "Messi" => 10,
        "Ronaldo" => 7,
        "Swaurez" => 11,
        "Sallah" => 3,
        "Coaster" => 9
    );

    //Question 8
    $keys = array_keys($players);
    sort($keys);
    print_r($keys);

?>