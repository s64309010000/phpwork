<?php

    $name = "Teera Binkasem";
    echo strlen($name);
    echo "<br>";
    $word = "I love you";
    echo str_word_count($word);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($word,"love");
    echo "<br>";
    echo str_replace("love","hate",$word);
    echo "<br>";
    echo strtoupper($word);
    echo "<br>";
    echo strtolower($name);
    echo "<br>";
    $word = "I love you";
    echo substr($word,-3);
    echo "<br>";
    echo substr($word,2,-4);
    echo "<br>";
    echo substr($word,2,4);

?>