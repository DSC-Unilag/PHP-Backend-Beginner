<?php
  
  function line_br() {
    echo "<br /><br /><br />";
  }

  // Task #1: Create an array of multiples of 5 from 125 to 800
  
  $multiple_array_of_5 = range(125, 800, 5);

  // Task #2: Print the array from question 1
  
  print_r($multiple_array_of_5);
  
  line_br();

  // Task #3: Print the 17th, 23rd and 48th item of the array from question 1
  //          in the format:
  //          "The 17th item is $17th and the 23rd item is $23rd and the 48th item is $48th".
  
  echo "The 17th item is $multiple_array_of_5[16] and the 23rd item is $multiple_array_of_5[22] and the 48th item is $multiple_array_of_5[47]";
  
  line_br();

  // Task #4: Echo the number of elements in the array from question 1
  
  echo count($multiple_array_of_5);
  
  line_br();

  // Task #5: Echo the sum of the elements in the array from question 1
  
  echo array_sum($multiple_array_of_5);
  
  line_br();

  // Task #6: Randomize the array,
  //          using shuffle and print the 17th, 23rd and 48th items again in the format used in question 3
  
  shuffle($multiple_array_of_5); # let's shuffle the numbers first, then
  
  echo "The 17th item is $multiple_array_of_5[16] and the 23rd item is $multiple_array_of_5[22] and the 48th item is $multiple_array_of_5[47]";
  
  line_br();

  // Task #7: Create an associative array that stores your top 5 favorite football players and their jersey number.
  # Hmm... I have no idea since I'm not the football fan by the way, but okay...
  $football_players = array(
    "Johan Cruyff" => 14,
    "Alan Shearer" => 9,
    "David de Gea" => 1,
    "Luis Figo" => 1,
    "Robin van Persie" => 20
  );

  print_r($football_players);

  line_br();

  // Task #8: Sort the array created in question 7 by the keys of the array.
  # assume the task is sort ascendingly
  ksort($football_players);
  print_r($football_players);

?>