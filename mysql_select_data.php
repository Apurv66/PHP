<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("sorry we failed to connect: " . mysqli_connect_error($conn));
        echo "<br>";
    }
    else{
        echo "connection was successful<br>";
    }

    $sql = "SELECT * FROM `mytable`";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    echo $num;
    echo "<br>";

    if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['no'] . ". " . "name: " . $row['name'] . " , age: " . $row['age'] . " , date: " . $row['date and time'];
            echo "<br>";
        }
    }
?>