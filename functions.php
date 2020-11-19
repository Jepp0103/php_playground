<?php 
    function simpleFunction() {
        echo "Hello world";
    }

    simpleFunction();
    echo "<br>";

    function sayHello($name) {
        echo "Hello $name <br>";
    }

    sayHello("Jeppe");
    
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    echo addNumbers(10, 10);

    echo "<br>";

    $number = 30;

    function addTwo(&$newNumber) { //Need & to manipulate number
        $newNumber += 2;
    }

    addTwo($number);

    echo $number;
?>