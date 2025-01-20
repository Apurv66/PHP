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

    $name = "rahul";
    $age = "20";
    $gender = "male";

    $sql = "INSERT INTO `mytable` (`name`, `age`, `gender`) VALUES ('$name', '$age', '$gender')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "The record has been inserted successfully.<br>";
    }
    else{
        echo "The record was not inserted successfully because of this error: " . mysqli_error($conn);
    }

?>