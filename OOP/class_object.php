<?php
    class ClassDemo{
        public $eno;
        public $name;
        function setData($eno, $name){
            $this->eno = $eno;
            $this->name = $name;
        }
        function printData(){
            echo "eno = " . $this->eno;
            echo "<br>name = " . $this->name;
        }
    }

    $obj = new ClassDemo();
    $obj->setData(5, "abc");
    $obj->printData();
?>