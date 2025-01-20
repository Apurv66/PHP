<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("sorry we failed to connect: " . mysqli_connect_error());
    }
    else {
        echo "conection was successful.<br>";
    }

    $sql = "DELETE FROM `mytable` WHERE `no` = 3";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo "Number of affected rows: " . $aff . "<br>";

    if($result){
        echo "Deleted successfully.<br>";
    }
    else {
        $err = mysqli_error($conn);
        echo "Not deleted successfully due to this error --> $err";
    }
?>