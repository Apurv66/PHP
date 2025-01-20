<?php
    $arr = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );

    for($i = 0; $i < count($arr); $i++){
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j];
            echo " ";
        }
        echo "<br>";
    }
?>