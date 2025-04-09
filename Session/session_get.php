<?php
    session_start();
    echo "name = ". $_SESSION['name'];
    echo "<br>";
    echo "id = ". $_SESSION['id'];
?>