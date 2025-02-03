<?php
    class Base{
        function method1(){
            echo "This is Base class<br>";
        }
    }
    class derived extends Base{
        function method2(){
            echo "This is Derived class<br>";
        }
    }

    $obj = new derived();
    $obj->method1();
    $obj->method2();
?>