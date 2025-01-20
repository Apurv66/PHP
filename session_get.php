<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Username: " . $_SESSION['username'];
        echo "<br> Password: " . $_SESSION['password'];
        echo "<br>";
    }
    else{
        echo "Please login to continue";
    }
?>