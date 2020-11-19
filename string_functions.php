<?php
# substr()
#Returns a portion of a string

$output = substr('Hello', 3);
echo $output;

//Return length of string
echo "<br>";
$newOutput = strlen("hello world");
echo $newOutput;

//Printing position index in string of specific character
echo "<br>";
$newOutput1 = strpos("hello world", "e");
echo $newOutput1;

echo "<br>";

$text = "Hello son";

$output2 = str_replace("son", "Everyone", $text);
echo $output2;

echo "<br>";

$values = [true, false, null, "ABC" , 33,  22, 22.4, 0, "0"];

foreach($values as $value) {
    if (is_string($value)) {
        echo "{$value} is a string <br>";
    } else {
        echo $value." is not a string <br>";
    }
}