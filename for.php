<?php

    for($num = 5;$num >= 1;$num--){
        echo $num;
    }

    echo "<hr color='red'>";
    //      *
    //      **
    //      ***
    //      ****
    //      *****

    for($row = 1; $row <= 5; $row++){
        for($star = 1; $star <= $row; $star++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr color='red'>";

    for($row = 1; $row <= 5; $row++){
        for($star = 5; $star >= $row; $star--){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr color='red'>";

    //      1
    //      2 3
    //      4 5 6
    //      7 8 9 10
    //      11 12 13 14 15
    $num = 1;
    for($row = 1; $row <= 5; $row++){
        for($star = 1; $star <= $row; $star++){
            echo $num."";
            $num = $num + 1;
            // echo $star;
            // echo "";
            // $star = $star + 1;
        }
        echo "<br>";
    }
    
?>