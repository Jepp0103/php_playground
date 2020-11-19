<?php
/*Arrays - variables that holds multiple values
    - Indexed
    - Associative
    - Multi-dimensional
  */

  //Indexed
  echo "Indexed arrays: <br>";

  $people = array('Kevin', 'Jeremy', 'Sara');
  echo $people[1];
  echo "<br>";
  $cars = ['Honda', 'Toyota', 'Suzuki'];
  echo $cars[0];
  echo "<br>";
  print_r($cars); //Printing whole array
  echo "<br>";
  echo count($cars);
  echo "<br>";

  //Associative arrays
  echo "Associative arrays: <br>";

  $people = array('Brad' => 35, 'Jose' => 23, 'Jeppe' => 25); //Defining key value pairs
    echo $people['Brad'];
    echo "<br>";
  $ids = [25 => 'Jeppe', 2 => 'Carl'];
    echo $ids[25];

  echo "<br>";

  //Multidimensional arrays
  echo "Multidimensional arrays: <br>";

  $animals = [
    ['Tiger', 'Orange', 20], 
    ['Elephant', 'Grey', 30], 
    ['Turtle', 'Green', 150]
  ];

  echo $animals[0][0]." ".$animals[0][1]." ".$animals[0][2];
?>
