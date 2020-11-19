<?php

#Loops - execute 

/*
    For 
    While
    Do..While
    Foreach
*/



  //Creating a for loop
  $p = 15;
  for ($x = 0; $x <= $p; $x++) {
    echo "The number is: $x <br>";
  }

  for ($i = 0; $i < 10; $i++) {
      echo $i;
  }

  echo '<br>';
  //While loop 
  $i = 0;

  while($i < 10) {
      echo $i;
      echo '<br>';
      $i++;
  }

  $i = 0;

  echo "Do while <br>";
  do {
    echo $i;
    echo '<br>';
    $i++;
  }
  while($i < 10);

  echo "People <br>";
  $people = ['Jeppe' => 25, 'Carl' => 29, 'Martin' => 20];

  foreach($people as $person => $age) {
    echo $person. ': '.$age;
    echo '<br>';
  }

?>