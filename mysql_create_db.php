<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    
    if(!$conn){
        die("Sorry we failed to connect: " . mysqli_connect_error() . "<br>");
    }
    else{
        echo "Connection was Successful!<br>";
    }

    $sql = "create database mydb";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        echo "The Database was created successfully.<br>";
    }
    else{
        echo "The Database was not created successfully because of this error: " . mysqli_error($conn);
    }

?>