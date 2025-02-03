<?php
    class Base{
        function print(){
            echo "Base class";
        }
    }
    class Derived extends Base{
        function print(){
            echo "Derived class";
        }
    }

    $obj = new Derived();
    $obj->print();
?>