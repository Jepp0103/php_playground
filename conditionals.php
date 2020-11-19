<?php
    # Conditionals
    $num = 5;

    if ($num === 5) {
        echo "Number is right";
    }

    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            echo $i."<br>";
        } else {
            echo "Not even number <br>";
        }
    }

    function danishGrade($num) {
        if ($num === 2) {
            echo "you just passed";
        } elseif ($num === 12 || $num === 10) {
            echo "excellent work";
        } else {
            echo "other grades or invalid grades";
        } 
    }

    danishGrade(10);
    echo "<br>";
    danishGrade(2);
?>