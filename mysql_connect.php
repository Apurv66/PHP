<?php
    echo "Welcome to the stage where we are ready to connected to a database<br>";
    
    /* Way to connect to a MySQL Database
    1. MySQLi extension
    2. PDO
    */
    // Conecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    
    if(!$conn){
        die("Sorry we failed to connect: " . mysqli_connect_error($conn));
    }
    else{
        echo "Connection was Successful!";
    }
?>