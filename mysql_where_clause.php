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

    $sql = "SELECT * FROM `mytable` WHERE `age` > 16";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    echo $num . " records found in database";
    echo "<br>";
    $no = 1;
    if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $no . ". " . "name: " . $row['name'] . " , age: " . $row['age'] . " , date: " . $row['date and time'];
            echo "<br>";
            $no = $no + 1;
        }
    }
    
    // usage of where clause to update data.
    $sql = "UPDATE `mytable` SET `name` = 'kamal' WHERE `mytable`.`no` = 5";
    $result = mysqli_query($conn, $sql);
    echo var_dump($result);
    echo "<br>";
    $aff = mysqli_affected_rows($conn);
    echo "Number of affected rows: " . $aff;
    echo "<br>";
    if($result){
        echo "we updated the record successfully.";
    }
    else {
        echo "We could not update the record successfully.";
    }
?>