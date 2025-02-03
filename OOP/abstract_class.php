<?php
    abstract class Base {
        abstract function print();
    }

    class Derived extends Base {
        function print(){
            echo "hello world";
        }
    }

    $obj = new Derived();
    $obj->print();
?>