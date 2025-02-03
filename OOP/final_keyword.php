<?php
    //The final class is a class that cannot be extended by other classes.
    final class Base {
        function print(){
            echo "Base class";
        }
    }

    // class Derived extends Base {}    //this line gives an error

    $obj = new Base();
    $obj->print();
?>