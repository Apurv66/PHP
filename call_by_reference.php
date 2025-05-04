<?php
    function add(&$a){
        $a = $a + 5;
    }
    $a = 10;
    add($a);
    echo "a = " . $a;
?>