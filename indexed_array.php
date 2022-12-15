<?php

    $students = array(
        "teera",
        "weera",
        "peera",
        "meera"
    );
    
    echo "จำนวนข้อมูล ".count($students)."&nbsp;รายการ<br>";
    echo $students[1]."<br>";

    echo "<hr color='red'>";

    for($num = 0;$num < count($students); $num++){
        echo  $students[$num]."<br>";
    }

    echo "<hr color='green'>";

    foreach($students as $std){
        echo $std."<br>";
    }

    echo "<hr color='blue'>";
    sort($students);
    foreach($students as $std){
        echo $std."<br>";
    }

    echo "<hr color='blue'>";
    rsort($students);
    foreach($students as $std){
        echo $std."<br>";
    }

?>