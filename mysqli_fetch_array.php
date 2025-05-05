<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"test");
    $qry = "select * from cric";
    $result = mysqli_query($conn,$qry);
    while($row = mysqli_fetch_array($result)){
        echo "id = " . $row[0];
        echo "<br>";
        echo "name = " . $row[1];
        echo "<br>";
    }

    if(!$result){
        echo "failed!!";
    }
    else{
        echo "success...";
    }
?>