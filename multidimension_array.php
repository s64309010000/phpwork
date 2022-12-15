<?php

    $students = array(
        array("Teera",99,3.33), //0
        array("Weera",77,2.22), //1
        array("Peera",66,1.11), //2
        array("Meera",55,0.00), //3
    );

    echo $students[2][1]."<br>";
    echo $students[1][2]."<br>";
    echo count($students)."<br>";

    echo "<hr color='red'>";

    for($r = 0;$r < count($students);$r++){
        for($c = 0;$c < 3; $c++){
            echo $students[$r][$c].", ";
        }
        echo "<br>";
    }

   


?>