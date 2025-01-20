<?php
    //  strlen()
    $a = "hello";
    echo strlen($a);
    echo "<br>";

    //  str_word_count()
    $a = "hello how are you.";
    echo str_word_count($a);
    echo "<br>";

    //  strrev()
    $a = "apple";
    echo strrev($a);
    echo "<br>";

    //  strpos()
    $a = "how are you?";
    echo strpos($a, "are");
    echo "<br>";

    //  str_replace()
    $a = "my friend is good person.";
    echo str_replace("friend", "brother", $a);
    echo "<br>";

    //  str_replace()
    $a = "hello ";
    echo str_repeat($a, 8);
    echo "<br>";

    //  ltrim() and rtrim()
    $a = "     hello how are you     ";
    echo "<pre>";   // <pre></pre> it is used to print as it is.
    echo ltrim($a);
    echo "<br>";
    echo rtrim($a);
    echo "</pre>";
    echo "<br>";

?>