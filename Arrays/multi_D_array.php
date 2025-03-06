<?php
    $arr = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            echo $arr[$i][$j]." ";
        }
        echo "<br>";
    }
?>