<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"test");
    $qry = "select * from cric";
    $result = mysqli_query($conn,$qry);
    while($row = mysqli_fetch_assoc($result)){
        echo "id = " . $row["id"];
        echo "<br>";
        echo "name = " . $row["name"];
        echo "<br>";
    }

    if(!$result){
        echo "failed!!";
    }
    else{
        echo "success...";
    }
?>