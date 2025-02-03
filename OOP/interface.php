<?php
    interface Base {
        function print();
    }
    class Derived implements Base {
        function print(){
            echo "hello wolrd";
        }
    }

    $obj = new Derived();
    $obj->print();
?>