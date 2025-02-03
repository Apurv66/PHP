<?php
    class Base {
        public $a;
        function set($a){
            $this->a = $a;
        }
        function print(){
            echo "a = ". $this->a . "<br>";
        }
    }

    $obj = new Base();
    $obj->set(5);
    $obj->print();
    $copy = clone $obj;
    $copy->set(10);
    $copy->print();
?>