<?php
    // Arithmetic Operators
    $a = 9;
    $b = 3;
    echo $a + $b . "<br>";
    echo $a - $b . "<br>";
    echo $a * $b . "<br>";
    echo $a / $b . "<br>";
    echo $a % $b . "<br>";
    echo $a ** $b . "<br>";

    // Assignment Operators
    $a = 5;
    echo "a = " . $a . "<br>";
    $a +=5;
    echo "a = " . $a . "<br>";
    $a -=5;
    echo "a = " . $a . "<br>";
    $a *=5;
    echo "a = " . $a . "<br>";
    $a /=5;
    echo "a = " . $a . "<br>";

    // Comparison Operators
    $a = 4;
    $b = 3;
    echo var_dump($a == $b) . "<br>";
    echo var_dump($a != $b) . "<br>";
    echo var_dump($a < $b) . "<br>";
    echo var_dump($a > $b) . "<br>";
    echo var_dump($a <= $b) . "<br>";
    echo var_dump($a >= $b) . "<br>";

    // Logical Operators
    $a = true;
    $b = false;
    echo var_dump($a and $b) . "<br>";
    echo var_dump($a or $b) . "<br>";
    echo var_dump(!($a and $b)) . "<br>";
?>