<?php
    class DestructorDemo{
        public $eno;
        public $name;

        function __construct($eno, $name){
            $this->eno = $eno;
            $this->name = $name;
        }
        function printData(){
            echo "eno = " . $this->eno;
            echo "<br>name = " . $this->name;
        }
        function __destruct(){
            echo "<br>Object is Destroyed";
        }
    }

    $obj = new DestructorDemo(20, "abc");
    $obj->printData();
?>