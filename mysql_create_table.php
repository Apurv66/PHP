<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if(!$conn){
        die("Sorry we failed to connect: " . mysqli_connect_error() . "<br>");
    }
    else{
        echo "Connection was Successful!<br>";
    }

    $sql = "CREATE TABLE `mytable` (`sr` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , PRIMARY KEY (`sr`))";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        echo "The table was created successfully.<br>";
    }
    else{
        echo "The table was not created successfully because of this error: " . mysqli_error($conn);
    }

?>