<?php
    class ConstructorDemo{
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
    }

    $obj = new ConstructorDemo(20, "abc");
    $obj->printData();
?>