<?php

    $students = array(
        "teera"=>"3.33",
        "weera"=>"2.22",
        "peera"=>"0.00",
        "meera"=>"1.11"
    );
    
    echo "จำนวนข้อมูล ".count($students)."&nbsp;รายการ<br>";
    echo "<hr color='red'>";

    foreach($students as $std => $vstd){
        echo $std." => ".$vstd."<br>";
        echo $std."<br>";
        echo $vstd."<br>";
    }

    echo "<hr color='red'>";
    asort($students);
    foreach($students as $std => $vstd){
        echo $std." => ".$vstd."<br>";
    }

    echo "<hr color='red'>";
    ksort($students);
    foreach($students as $std => $vstd){
        echo $std." => ".$vstd."<br>";
    }

    echo "<hr color='red'>";
    arsort($students);
    foreach($students as $std => $vstd){
        echo $std." => ".$vstd."<br>";
    }

    echo "<hr color='red'>";
    krsort($students);
    foreach($students as $std => $vstd){
        echo $std." => ".$vstd."<br>";
    }

?>