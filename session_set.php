<?php
    session_start();
    $_SESSION['username'] = "xyz";
    $_SESSION['password'] = "1234";
    echo "We have saved your session";
?>