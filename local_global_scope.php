<?php
    $a = 10;
    function printVal(){
        global $a;
        echo "$a <br>";
    }

    printVal();
?>