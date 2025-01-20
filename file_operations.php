<?php
    // readfile() is used to olny read the file.
    $data = readfile("myfile.txt");
    echo $data;
    echo "<br>";
    readfile("myfile.txt");


    // file operations.
    // $f = fopen("myfile.txt", "r");
    // $data = fread($f, filesize("myfile.txt"));
    // echo $data;
    // fclose($f);


    // fgets() reads only a single line of a file.
    // $f = fopen("myfile.txt", "r");
    // echo fgets($f);
    // echo fgets($f);
    // fclose($f);


    // fgetc() reads oly a single charecter of a file.
    // $f = fopen("myfile.txt", "r");
    // echo fgetc($f);
    // fclose($f);


    // $f = fopen("myfile.txt", "w");
    // fwrite($f, "hello world!");
    // fclose($f);


    // $f = fopen("myfile.txt", "a");
    // fwrite($f, "hello world!");
    // fclose($f);
?>